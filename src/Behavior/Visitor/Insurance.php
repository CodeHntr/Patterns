<?php

namespace Patterns\Behavior\Visitor;

class Insurance implements Visitor
{
    public function visitHouse(House $element): void
    {
        echo $element->offerForHouse() . " Insurance company<br />";
    }

    public function visitCommerce(Commerce $element): void
    {
        echo $element->offerForCommerce() . " Insurance company<br />";
    }
}