<?php

namespace Patterns\Behavior\Strategy;

class Duck
{
    private FlyInterface $flyBehavior;

    private QuackInterface $quackBehavior;

    public function setFly($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }

}