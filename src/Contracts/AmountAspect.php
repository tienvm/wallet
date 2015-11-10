<?php

namespace Contracts;

/**
 * Interface AmountAspect
 * @package Bot\Wallet
 */
interface AmountAspect
{
    /**
     * @param Money $money
     * @return self
     */
    public function setValue(Money $money);

    /**
     * @return Money
     */
    public function getValue();

    /**
     * @return string
     */
    public function reason();

    /**
     * @return \DateTime
     */
    public function proceededAt();

    /**
     * @param Money $money
     * @return Money
     */
    public function alter(Money $money);

    /**
     * If returning false -> can proceed
     * return a string -> can not proceed, the
     * returned string is reason
     *
     * @param Money $money
     * @return bool|string
     */
    public function shouldNotProceed(Money $money);
}

