<?php

namespace Patterns\Behavior\Visitor;

interface Component
{
    public function accept(Visitor $visitor): void;
}
