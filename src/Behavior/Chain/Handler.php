<?php

namespace Patterns\Behavior\Chain;

interface Handler
{
    public function setNext(Handler $handler): Handler;
}