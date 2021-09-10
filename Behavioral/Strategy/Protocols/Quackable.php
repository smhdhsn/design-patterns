<?php

namespace Patterns\Behavioral\Strategy\Protocols;

/**
 * The ability to quack.
 */
interface Quackable
{
    public function quack(): string;
}
