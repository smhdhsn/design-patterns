<?php

namespace Patterns\Structural\Facade\Protocols;

interface Addable
{
    /**
     * Ingredients must be addable to the Pizza.
     */
    public function add(): void;
}
