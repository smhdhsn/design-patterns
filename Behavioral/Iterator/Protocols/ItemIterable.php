<?php

namespace Patterns\Behavioral\Iterator\Protocols;

interface ItemIterable
{
    /**
     * Every iterable collection of items must have a specific iterator.
     */
    public function getIterator(): ItemIterator;
}
