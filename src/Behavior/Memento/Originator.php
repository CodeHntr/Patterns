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

    public function doSomething(): void
    {
        echo "Оригінатор: Я змінюю позицію <br />";
        $this->state = $this->generateRandomString(30);
    }

    private function generateRandomString(int $lenght = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($lenght / strlen($x))
                )
            ),
            1,
            $lenght,
        );
    }

    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Оригінатор: Мій стан був змінений до:{$this->state}<br />";
    }
}
