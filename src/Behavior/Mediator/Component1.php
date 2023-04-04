<?php

namespace Patterns\Behavior\Mediator;

class Component1 extends BaseComponent
{
    public function getCherry(): void
    {
        echo "Об'єкт Вишня<br />";
        $this->mediator->notify($this, "Вишня");
    }

    public function getFact(): void
    {
        echo "З квіток вишні медоносні бджоли збирають щедрий «урожай» нектару і пилку<br />";
        $this->mediator->notify($this, "B");
    }
}
