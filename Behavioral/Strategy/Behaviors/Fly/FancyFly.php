<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Fly;

use Patterns\Behavioral\Strategy\Protocols\Flyable;

/**
 * Type of flying.
 */
class FancyFly implements Flyable 
{
    public function fly(): string
    {
        return "I'm flying fancily.";
    }
}
