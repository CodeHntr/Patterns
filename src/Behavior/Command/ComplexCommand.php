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


}
