<?php

use AmountAspects\WithDraw;
use Money\USD;
use Money\VND;
use Wallet\AspectHistory;
use Wallet\Wallet;

require_once __DIR__ . '/vendor/autoload.php';


$wallet = new Wallet(new AspectHistory());

$wallet->init(new USD(10));

$withDraw = new WithDraw();
$withDraw->setValue(new VND(22.7 * 5));

$wallet->proceed($withDraw);

echo $wallet->money()->value();