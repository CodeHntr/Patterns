<?php

namespace Patterns\Facade;

class Facade
{
    protected Subsystem1 $subsystem1;

    protected Subsystem2 $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    public function reaize(): string
    {
        $result = "Фасад Ініціалізує системи:<br />";
        $result .= $this->subsystem1->searchProduct() . "<br />";
        $result .= $this->subsystem2->searchProduct() . "<br />";
        $result .= "Фасад наказує підсистемам виконувати дії: <br />";
        $result .= $this->subsystem1->sendProduct() . "<br />";
        $result .= $this->subsystem2->moveProduct() . "<br />";

        return $result;
    }
}
