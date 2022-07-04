<?php

namespace Patterns\Facade;

class Facade
{
    protected $subsystem1;

    protected $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    public function reaize(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->searchProduct();
        $result .= $this->subsystem2->searchProduct();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->sendProduct();
        $result .= $this->subsystem2->moveProduct();

        return $result;
    }
}
