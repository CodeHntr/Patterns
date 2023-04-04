<?php

namespace Patterns\Behavior\Command;

interface Command
{
    public function execute(): void;
}