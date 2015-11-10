<?php

namespace Money;

use Contracts\Money;

class GenericMoney implements Money
{
    /**
     * @var float
     */
    protected $value;

    /**
     * USD constructor.
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param Money $money
     * @return mixed
     */
    public function subtract(Money $money)
    {
        $thisValueToVnd = $this->exchangeToVND();
        $moneyToVnd     = $money->exchangeToVND();

        $this->value = static::exchangeFromVND($thisValueToVnd - $moneyToVnd);

        return $this;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function greater(Money $money)
    {
        $thisValueToVnd = $this->exchangeToVND();
        $moneyToVnd     = $money->exchangeToVND();

        return $thisValueToVnd > $moneyToVnd;
    }

    /**
     * @param Money $money
     * @return self
     */
    public function add(Money $money)
    {
        $thisValueToVnd = $this->exchangeToVND();
        $moneyToVnd     = $money->exchangeToVND();

        $this->value = static::exchangeFromVND($thisValueToVnd + $moneyToVnd);

        return $this;
    }

    /**
     * @return float
     */
    public static function getRatioAgainstVND()
    {
        throw new Exception('Need a ratio against VND to start using this Money');
    }

    /**
     * @return mixed
     */
    public function exchangeToVND()
    {
        return $this->value / static::getRatioAgainstVND();
    }

    /**
     * @param $vndValue
     * @return float
     */
    public static function exchangeFromVND($vndValue)
    {
        return $vndValue * static::getRatioAgainstVND();
    }

    public function value()
    {
        return $this->value;
    }
}