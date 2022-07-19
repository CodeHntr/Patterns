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


}