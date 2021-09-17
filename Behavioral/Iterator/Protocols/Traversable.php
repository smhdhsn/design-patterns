<?php

namespace Patterns\Behavioral\Iterator\Protocols;

interface Traversable
{
    /**
     * Every iterable collection of items must have a specific iterator.
     */
    public function getIterator(): Traverser;
}
