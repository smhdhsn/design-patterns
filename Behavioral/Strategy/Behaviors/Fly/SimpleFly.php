<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Fly;

use Patterns\Behavioral\Strategy\Protocols\Flyable;

class SimpleFly implements Flyable 
{
    /**
     * Type of flying.
     */
    public function fly(): string
    {
        return "I'm flying simply.";
    }
}
