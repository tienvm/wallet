<?php

namespace Contracts;

interface Money
{
    /**
     * @param Money $money
     * @return Money
     */
    public function subtract(Money $money);

    /**
     * @param Money $money
     * @return bool
     */
    public function greater(Money $money);

    /**
     * @param Money $money
     * @return Money
     */
    public function add(Money $money);

    /**
     * @return float
     */
    public static function getRatioAgainstVND();

    /**
     * @return float
     */
    public function exchangeToVND();

    /**
     * @param $vndValue
     * @return float
     */
    public static function exchangeFromVND($vndValue);

    /**
     * @return float
     */
    public function value();

}