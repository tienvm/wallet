<?php

namespace Wallet;

use Contracts\AmountAspect;

class AspectHistory
{


    public function __construct()
    {
    }

    /**
     * @param AmountAspect $amountAspect
     * @return self
     */
    public function write(AmountAspect $amountAspect)
    {
        // TODO
    }

    /**
     * @param AspectFindingCondition $condition
     * @return AmountAspect[]
     */
    public function find(AspectFindingCondition $condition)
    {
       // TODO
    }
}