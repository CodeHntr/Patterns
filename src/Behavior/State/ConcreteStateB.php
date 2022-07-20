<?php

namespace Patterns\Behavior\State;

class ConcreteStateB extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateB Обробляє запит1.<br />";
    }

    public function handle2(): void
    {
        echo "ConcreteStateB обробляє запит2.<br />";
        echo "ConcreteStateB хоче змінити стан контексту.<br />";
        $this->context->transitionTo(new ConcreteStateA());
    }

}