<?php

namespace Patterns\Behavior\Iterator;


class WordsCollection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

}