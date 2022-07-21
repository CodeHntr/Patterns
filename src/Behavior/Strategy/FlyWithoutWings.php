<?php

namespace Patterns\Behavior\Strategy;

class FlyWithoutWings implements FlyInterface
{
    public function fly()
    {
        print "Я не можу літати";
    }
}