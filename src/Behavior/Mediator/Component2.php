<?php

namespace Patterns\Behavior\Mediator;

class Component2 extends BaseComponent
{
    public function getBee(): void
    {
        echo "Бджола<br />";
        $this->mediator->notify($this, "Бджола");
    }

    public function getFact(): void
    {
        echo "У бджіл є спеціальний кошик для перенесення пилку ...<br />";
        $this->mediator->notify($this, "C");
    }

}