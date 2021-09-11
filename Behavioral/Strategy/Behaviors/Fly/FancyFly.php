<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Fly;

use Patterns\Behavioral\Strategy\Protocols\Flyable;

class FancyFly implements Flyable 
{
    /**
     * Type of flying.
     */
    public function fly(): string
    {
        return "I'm flying fancily.";
    }
}
