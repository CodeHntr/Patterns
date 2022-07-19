<?php

namespace Patterns\Behavior\Command;

class Receiver
{
    public function doSomething(string $a): void
    {
        echo "Receiver: Працює над (" . $a . ") <br />";
    }


}