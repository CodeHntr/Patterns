<?php

namespace Patterns\Behavior\Command;


class PrintName implements Command
{
    private $payload;

    public function __construct($payload)
    {
        $this->payload = $payload;
    }
}