<?php

namespace Patterns\Composite;

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

    public function remove(Component $component): void
    {
        foreach ($this->children as $index => $child) {
            if ($child === $component) {
                unset($this->children[$index]);
            }
        }
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function getInfo(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->getInfo();
        }

        return "Fruit(" . implode("+", $results) . ")";
    }
}
