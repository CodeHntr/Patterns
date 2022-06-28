<?php

namespace Patterns\Prototype;

class Mercedes extends CarPrototype
{
    protected string $brand = '<strong>Mercedes-Benz</strong>';

    public function __clone()
    {
    }
}
