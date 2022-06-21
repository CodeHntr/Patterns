<?php

namespace Patterns\FactoryExample;


class WalletFactory
{
    public function createPocketWallet(): Wallet
    {
        return new PocketWallet();
    }

    public function createEWallet(): Wallet
    {
        return new EWallet();
    }
}