<?php

namespace Patterns\Behavior\Command;


class ComplexCommand implements Command
{

    /**
     * @var Receiver
     */
    private Receiver $receiver;

    private $a;

    private $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): void
    {
        echo "ComplexCommand: Приймач виконує складні речі<br />";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}
