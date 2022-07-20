<?php

namespace Patterns\Behavior\Memento;


interface Memento
{
    public function getName(): string;

    public function getDate(): string;

}