<?php

namespace AmountAspects;

use Contracts\AmountAspect;
use Contracts\Money;

class WithDraw extends AbstractAmountAspect implements AmountAspect
{
    /**
     * @param Money $money
     * @return mixed
     */
    public function alter(Money $money)
    {
        return $money->subtract($this->getValue());
    }

    /**
     * @param Money $money
     * @return mixed
     */
    public function shouldNotProceed(Money $money)
    {
        if ($money->greater($this->getValue()))
        {
            return false;
        }

        return 'Out of Money!';
    }
}