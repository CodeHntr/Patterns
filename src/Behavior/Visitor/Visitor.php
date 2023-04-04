<?php

namespace Patterns\Behavior\Visitor;

interface Visitor
{
    public function visitHouse(House $element): void;

    public function visitCommerce(Commerce $element): void;
}