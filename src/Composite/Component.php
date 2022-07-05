<?php

namespace Patterns\Composite;

abstract class Component
{
    protected Component $parent;

    public function setParent(Component $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): Component
    {
        return $this->parent;
    }
}
