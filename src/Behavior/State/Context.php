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

    public function transitionTo(State $state): void
    {
        echo "Context: Перехід до " . get_class($state) . "<br />";
        $this->state = $state;
        $this->state->setContext($this);
    }
}
