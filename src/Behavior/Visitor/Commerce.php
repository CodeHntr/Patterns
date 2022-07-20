<?php

namespace Patterns\Behavior\Visitor;

class Commerce implements Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitCommerce($this);
    }

    public function offerForCommerce(): string
    {
        return "Пропозиція для комерції від";
    }
}