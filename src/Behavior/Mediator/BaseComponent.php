<?php

namespace Patterns\Behavior\Mediator;

class BaseComponent
{
    protected  $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }
}