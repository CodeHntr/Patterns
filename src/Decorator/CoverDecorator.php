<?php

namespace Patterns\Decorator;

class CoverDecorator extends Decorator
{
    public function apply(): string
    {
        return "Чехол (" . parent::apply() . ")";
    }
}
