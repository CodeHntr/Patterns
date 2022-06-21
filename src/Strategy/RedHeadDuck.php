<?php

class RedHeadDuck extends Duck
{
    public function __construct()
    {
        $this->setFly(new FlyWithoutWings());

        $this->setQuack(new HighQuack());
    }
}