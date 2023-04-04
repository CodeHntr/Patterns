<?php

namespace Patterns\Behavior\Visitor;

class House implements Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitHouse($this);
    }

    public function offerForHouse(): string
    {
        return "Пропозиція для будинків від";
    }
}
