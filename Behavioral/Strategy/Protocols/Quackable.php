<?php

namespace Patterns\Behavioral\Strategy\Protocols;

interface Quackable
{
    /**
     * The ability to quack.
     */
    public function quack(): string;
}
