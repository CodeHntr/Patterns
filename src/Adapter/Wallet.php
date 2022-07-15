<?php

namespace Patterns\Adapter;

interface Wallet
{
    public function open();

    public function putMoney(float $sum);

    public function takeMoney(float $sum);

    public function getSum(): float;
}
