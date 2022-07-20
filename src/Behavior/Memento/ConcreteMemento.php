<?php


namespace Patterns\Behavior\Memento;

class ConcreteMemento implements Memento
{
    private $state;

    private $date;

    public function __construct(string $state)
    {
        $this->state = $state;

        $this->date = date('Y-m-d H-i-s');
    }

}
