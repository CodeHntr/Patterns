<?php

namespace Patterns\AbstractFactory;


class NikeTShirt implements TShirt
{
    public function pack(): string
    {
      return "Футболка 'Nike' запакована.";
    }
}