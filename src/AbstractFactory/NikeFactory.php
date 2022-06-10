<?php

namespace Patterns\AbstractFactory;


class NikeFactory implements AbstractFactory
{
    public function createSneakers(): Sneakers
    {
        return new NikeSneakers();
    }

    public function createShorts(): Shorts
    {
        return new NikeShorts();
    }

    public function createTShirt(): TShirt
    {
        return new NikeTShirt();
    }
}