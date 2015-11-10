<?php

namespace AmountAspects;

use Contracts\AmountAspect;
use Contracts\Money;

class Income extends AbstractAmountAspect implements AmountAspect
{
    /**
     * @param Money $money
     * @return mixed
     */
    public function alter(Money $money)
    {
        return $money->add($this->getValue());
    }

    /**
     * @param Money $money
     * @return mixed
     */
    public function shouldNotProceed(Money $money)
    {
        return false;
    }
}