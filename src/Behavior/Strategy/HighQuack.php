<?php

namespace Patterns\Behavior\Strategy;

class HighQuack implements QuackInterface
{
    public function quack()
    {
        print "Дуже голосний кряк";

    }
}