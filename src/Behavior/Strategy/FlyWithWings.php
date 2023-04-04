<?php

namespace Patterns\Behavior\Strategy;

class FlyWithWings implements FlyInterface
{
    public function fly()
    {
        print "Політ з крилами";
    }
}