<?php

namespace Patterns\Facade;

class Subsystem1
{
    public function searchProduct(): string
    {
        return "Товар готовий до відправки.";
    }

    public function sendProduct(): string
    {
        return "Товар відправлено!";
    }

}
