<?php

namespace Patterns\Behavior\Iterator;


class WordsCollection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

}