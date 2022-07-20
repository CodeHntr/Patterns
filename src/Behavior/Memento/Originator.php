<?php

namespace Patterns\Behavior\Memento;


class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Творець: Моя визначена позиція : {$this->state}<br />";
    }
}
