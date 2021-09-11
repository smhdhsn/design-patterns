<?php

namespace Patterns\Behavioral\Strategy\Protocols;

interface Meowable
{
    /**
     * The ability to meow.
     */
    public function meow(): string;
}
