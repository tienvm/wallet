<?php

namespace AmountAspects;

use Contracts\AmountAspect;
use Contracts\Money;

abstract class AbstractAmountAspect implements AmountAspect
{
    protected $value;

    public function setValue(Money $money)
    {
        $this->value = $money;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function reason()
    {
        // TODO: Implement reason() method.
    }

    public function proceededAt()
    {
        // TODO: Implement proceededAt() method.
    }

    abstract public function alter(Money $money);

    abstract public function shouldNotProceed(Money $money);

}