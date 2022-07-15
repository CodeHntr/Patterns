<?php

namespace Patterns\Decorator;

class Decorator implements Phone
{
    protected Phone $phone;

    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }


    public function apply(): string
    {
        return $this->phone->apply();
    }
}
