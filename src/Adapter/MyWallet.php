<?php

namespace Patterns\Adapter;

class MyWallet implements Wallet
{
    private float $sum;

    public function open()
    {
    }

    public function putMoney(float $sum)
    {
       $this->sum = $sum;
    }

    public function takeMoney(float $sum)
    {
        $this->sum = $this->sum - $sum;
    }

    public function getSum(): float
    {
        return $this->sum;
    }
}
