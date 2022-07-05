<?php

namespace Patterns\Composite;

class Branch extends Component
{
    /**
     * @var Component[]
     *
     */
    protected array $children;

    public function __construct()
    {
        $this->children = [];
    }

    public function getInfo(): string
    {
        return "";
    }
}

