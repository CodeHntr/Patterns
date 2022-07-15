<?php

namespace Patterns\Decorator;

class MyPhone implements Phone
{
    public function apply(): string
    {
        return "Телефон";
    }
}
