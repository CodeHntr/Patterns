<?php

namespace Patterns\Flyweight;

class Flyweight
{
    private array $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }


