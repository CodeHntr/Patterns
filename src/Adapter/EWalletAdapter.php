<?php

namespace Patterns\Adapter;

class EWalletAdapter implements Wallet
{

    public function __Construct(protected EWallet $eWallet)
    {
    }

    public function open()
    {
        $this->eWallet->login();
    }

    public function putMoney(float $sum)
    {
        $this->eWallet->replenish($sum);
    }

    public function takeMoney(float $sum)
    {
        $this->eWallet->pay($sum);
    }

    public function getSum(): float
    {
        return $this->eWallet->getSum();
    }

    public function getLimit(): int
    {
        return $this->eWallet->getLimit();
    }
}
