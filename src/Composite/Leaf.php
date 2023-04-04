<?php

namespace Patterns\Composite;

class Leaf extends Component
{
    private string $name;

    public function __construct(string $name = "")
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return $this->name;
    }
}