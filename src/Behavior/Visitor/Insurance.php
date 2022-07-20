<?php

namespace Patterns\Behavior\Visitor;

class Insurance implements Visitor
{
    public function visitHouse(House $element): void
    {
        echo $element->offerForHouse() . " Insurance company<br />";
    }

}