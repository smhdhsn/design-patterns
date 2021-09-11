<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Quack;

use Patterns\Behavioral\Strategy\Protocols\Quackable;

class FancyQuack implements Quackable 
{
    /**
     * Type of quacking.
     */
    public function quack(): string
    {
        return "I'm quacking fancily.";
    }
}
