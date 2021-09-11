<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Quack;

use Patterns\Behavioral\Strategy\Protocols\Quackable;

class SimpleQuack implements Quackable 
{
    /**
     * Type of quacking.
     */
    public function quack(): string
    {
        return "I'm quacking simply.";
    }
}
