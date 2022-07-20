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

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);

        echo "Спостерігач: Відновлення позиції: " . $memento->getName() . "<br />";
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

}