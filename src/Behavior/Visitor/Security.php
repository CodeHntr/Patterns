<?php

namespace Patterns\Behavior\Visitor;

class Security implements Visitor
{
    public function visitHouse(House $element): void
    {
        echo $element->offerForHouse() . " Security company<br />";
    }

    public function visitCommerce(Commerce $element): void
    {
        echo $element->offerForCommerce() . " Security company<br />";
    }
}
