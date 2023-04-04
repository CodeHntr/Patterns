<?php

namespace Patterns\Behavior\Iterator;


class AlphabeticalOrderIterator implements \Iterator
{
    /**
     * @var WordsCollection
     */
    private WordsCollection $collection;

    /**
     * @var int
     */
    private int $position = 0;
    /**
     * @var bool
     *
     */
    private bool $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
