<?php

namespace Patterns\AbstractFactory;

class AdidasShorts implements Shorts
{
    public function pack(): string
    {
        return "Шорти 'Adidas' запаковано.";
    }
}