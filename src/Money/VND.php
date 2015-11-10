<?php

namespace Money;

use Contracts\Money;

class VND extends GenericMoney implements Money
{
    /**
     *
     */
    public static function getRatioAgainstVND()
    {
        return 1;
    }

}