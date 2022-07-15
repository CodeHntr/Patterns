<?php

namespace Patterns\Decorator;

class GlassDecorator extends Decorator
{
    public function apply(): string
    {
        return "Захисне скло .(" . parent::apply() . ")";
    }
}
