<?php

namespace Patterns\Behavior\Visitor;

class Security implements Visitor
{
    public function visitHouse(House $element): void
    {
        echo $element->offerForHouse() . " Security company<br />";
    }

}
