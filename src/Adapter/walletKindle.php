<?php

namespace Patterns\Adapter;

class walletKindle implements EWallet
{
    private float $balance;

    private int $limit = 1000000;

    public function login()
    {
    }

    public function replenish(float $sum)
    {
        $this->balance = $sum;
    }

    public function pay(float $sum)
    {
        $this->balance = $this->balance - $sum;
    }

    public function getSum(): float
    {
        return $this->balance;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
