<?php

namespace Patterns\Facade;

class Subsystem2
{
    public function searchProduct(): string
    {
        return "Товар готовий до дій! ";
    }

    public function moveProduct(): string
    {
        return "Товар переміщено";
    }

}
