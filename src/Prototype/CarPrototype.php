<?php

namespace Patterns\Prototype;

abstract class CarPrototype
{
    protected string $brand;

    protected string $carBody;

    abstract public function __clone();

    final public function getCarBody(): string
    {
        return $this->carBody;
    }

    final public function setCarBody($carBody): void
    {
        $this->carBody = $carBody;
    }

}
