<?php

namespace Patterns\Behavioral\Strategy\Protocols;

interface Flyable
{
    /**
     * The ability to fly.
     */
    public function fly(): string;
}
