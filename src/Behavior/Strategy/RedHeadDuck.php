<?php

namespace Patterns\Behavior\Strategy;

class RedHeadDuck extends Duck
{
    public function __construct($wings, $quack)
    {
        $this->setFly($wings);

        $this->setQuack($quack);
    }
}