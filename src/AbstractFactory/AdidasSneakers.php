<?php

namespace Patterns\AbstractFactory;

class AdidasSneakers implements Sneakers
{
    public function pack(): string
    {
        return "Кросівки 'Adidas' запаковані.";
    }
}