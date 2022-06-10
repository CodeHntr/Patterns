<?php

namespace Patterns\AbstractFactory;

class AdidasTShirt implements TShirt
{
    public function pack(): string
    {
        return "Футболка 'Adidas' запакована.";
    }
}