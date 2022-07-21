<?php

namespace Patterns\Behavior\Strategy;

class LowQuack implements QuackInterface
{
    public function quack()
    {
        print "Дуже тихенький, охриплий кряк.";
    }
}