<?php

use Patterns\Composite\Component;

class Fruit extends Component
{
    /**
     * @var Component[]
     */
    protected array $children;

    public function __construct()
    {
        $this->children = [];
    }

    public function add(Component $component): void
    {
        $this->children[] = $component;
        $component->setParent($this);
    }
}
