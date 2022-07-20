<?php

namespace Patterns\Behavior\Memento;


class Caretaker
{
    /**
     * @var Memento[]
     */
    private array $mementos = [];

    /**
     * @var Originator
     */
    private Originator $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo "<br />Спостерігач: Збереження оригінальної позиції...<br />";
        $this->mementos[] = $this->originator->save();
    }
}