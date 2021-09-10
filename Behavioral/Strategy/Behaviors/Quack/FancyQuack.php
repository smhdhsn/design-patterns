<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Quack;

use Patterns\Behavioral\Strategy\Protocols\Quackable;

/**
 * Type of quacking.
 */
class FancyQuack implements Quackable 
{
    public function quack(): string
    {
        return "I'm quacking fancily.";
    }
}
