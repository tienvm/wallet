<?php

namespace Money;

use Contracts\Money;

class USD extends GenericMoney implements Money
{
    /**
     * @return float
     */
    public static function getRatioAgainstVND()
    {
        return 1 / 22.7;
    }
}