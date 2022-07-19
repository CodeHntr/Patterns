<?php

namespace Patterns\Behavior\Mediator;

class BaseComponent
{
    protected Mediator $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

}