<?php

namespace Patterns\Bridge;

class BMW extends Car
{
    public function paint(): string
    {
        return "Автомобіль марки BMW пофарбовано у  " . $this->carPaint->setColor();
    }
}
