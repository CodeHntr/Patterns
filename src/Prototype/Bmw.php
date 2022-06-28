<?php

namespace Patterns\Prototype;

class Bmw extends CarPrototype
{
    protected string $brand = '<strong>BMW</strong>';

    public function __clone()
    {
    }
}
