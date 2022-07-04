<?php

namespace Patterns\Facade;

class Subsystem1
{
    public function searchProduct(): string
    {
        return "Товар готовий до дій.";
    }

    public function deliverProduct(): string
    {
        return "Річ обрано та готується до відправлення\n";
    }

}
