<?php

namespace Patterns\AbstractFactory;

class AdidasFactory implements AbstractFactory
{
    public function createSneakers(): Sneakers
    {
        return new AdidasSneakers();
    }

    public function createShorts(): Shorts
    {
        return new AdidasShorts();
    }

    public function createTShirt(): TShirt
    {
        return new AdidasTShirt();
    }
}

