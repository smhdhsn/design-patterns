<?php

namespace Patterns\Behavioral\Iterator\Iterators;

use Patterns\Behavioral\Iterator\Protocols\{ItemIterator, Item};
use Patterns\Behavioral\Iterator\Iterables\BookList;

class BookListIterator implements ItemIterator
{
    /**
     * Book collection's instance.
     */
    private BookList $collection;

    /**
     * Index of the current iteration.
     */
    private int $index = 0;

    public function __construct(BookList $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Checking if there is any item left to iterate in the collection.
     */
    public function hasNext(): bool
    {
        return count($this->collection->books) > $this->index;
    }

    /**
     * Moving the pointer of the iterator to the next position of the collection.
     */
    public function next(): void
    {
        $this->index++;
    }

    /**
     * Getting the current item of the collection.
     */
    public function getCurrent(): Item
    {
        return $this->collection->books[$this->index];
    }
}
