<?php

namespace Patterns\Behavior\Mediator;

class ConcreteMediator implements Mediator
{
    private Component1 $component1;

    private Component2 $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 = $c1;
        $this->component1->setMediator($this);
        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }

}