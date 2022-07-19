<?php

namespace Patterns\Behavior\Mediator;

class Component1 extends BaseComponent
{
    public function getCherry(): void
    {
        echo "Об'єкт Вишня<br />";
        $this->mediator->notify($this, "Вишня");
    }

}
