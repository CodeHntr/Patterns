<?php

namespace Patterns\FactoryExample;


class PocketWallet implements Wallet
{
    public function replenish()
    {
        return "Поклав гроші у гаманець";
    }

    public function spend()
    {
        return "Дістав гроші з гаманця і потратив";
    }
}