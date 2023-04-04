<?php

namespace Patterns\Behavior\Mediator;


interface Mediator
{
    public function notify(object $sender, string $event): void;
}