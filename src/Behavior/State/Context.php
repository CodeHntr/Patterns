<?php

namespace Patterns\Behavior\State;

class Context
{
    /**
     * @var State
     */
    private $state;


    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

}
