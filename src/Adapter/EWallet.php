<?php

namespace Patterns\Adapter;

interface EWallet
{
    public function login();

    public function replenish(float $sum);

    public function pay(float $sum);

    public function getSum(): float;
}
