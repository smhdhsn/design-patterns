<?php

namespace Patterns\Behavioral\Iterator\Protocols;

interface ItemIterator
{
    /**
     * Every iterator must present a way to the client for them to check the weather if
     * there is any item left to iterate in the collection.
     */
    public function hasNext(): bool;

    /**
     * Every iterator must present a way to move the pointer of the iterator to the next
     * position of the collection.
     */
    public function next(): void;

    /**
     * Every iterator must present a way to get the current item of the collection.
     */
    public function getCurrent(): Item;
}
