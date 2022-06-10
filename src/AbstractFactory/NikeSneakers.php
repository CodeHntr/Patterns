<?php

namespace Patterns\AbstractFactory;


class NikeSneakers implements Sneakers
{
    public function pack(): string
    {
        return "Кросівки 'Nike' запаковані";
    }
}
