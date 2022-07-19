<?php

namespace Patterns\Behavior\Mediator;

class Component2 extends BaseComponent
{
    public function getBee(): void
    {
        echo "Бджола<br />";
        $this->mediator->notify($this, "Бджола");
    }

}