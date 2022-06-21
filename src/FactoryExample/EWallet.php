<?php

namespace Patterns\FactoryExample;


class EWallet implements Wallet
{
    public function replenish()
    {
        return "Поповнив свою картку";
    }

    public function spend()
    {
        return "Оплатив карткою";
    }
}