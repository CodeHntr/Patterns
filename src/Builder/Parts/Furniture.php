<?php

namespace Patterns\Builder\Parts;

abstract class Furniture
{
    protected array $parts;

    final public function setPart(string $key, object $part): void
    {
        $this->parts[$key] = $part;
    }

    final public function getParts(): array
    {
        return $this->parts;
    }
}