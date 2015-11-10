<?php

namespace Wallet;

use Contracts\AmountAspect;
use Contracts\Money;
use Contracts\ProceedException;

class Wallet
{

    /**
     * @var AspectHistory
     */
    protected $history;

    /**
     * @var Money
     */
    protected $money;

    /**
     * Wallet constructor.
     * @param AspectHistory $history
     */
    public function __construct(AspectHistory $history)
    {
        $this->history = $history;
    }

    /**
     * @param Money $money
     * @return self
     */
    public function init(Money $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @return Money
     */
    public function money()
    {
        return $this->money;
    }

    /**
     * @throws ProceedException
     * @param AmountAspect $amountAspect
     */
    public function proceed(AmountAspect $amountAspect)
    {
        if ($reasonWhyNotToProceed = $amountAspect->shouldNotProceed($this->money))
        {
            throw new ProceedException($reasonWhyNotToProceed);
        }

        $this->money = $amountAspect->alter($this->money);

        $this->history->write($amountAspect);
    }
}