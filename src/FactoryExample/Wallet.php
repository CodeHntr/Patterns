<?php

namespace Patterns\FactoryExample;


interface Wallet
{
    public function replenish();

    public function spend();
}