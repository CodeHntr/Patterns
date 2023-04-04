<?php

namespace Patterns\Behavior\State;

class ConcreteStateA extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateA Обробляє запит1.<br />";
        echo "ConcreteStateA хоче змінити стан контексту.<br />";
        $this->context->transitionTo(new ConcreteStateB());
    }

    public function handle2(): void
    {
        echo "ConcreteStateA Обробляє запит2.<br />";
    }
}