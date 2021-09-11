<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Meow;

use Patterns\Behavioral\Strategy\Protocols\Meowable;

class SimpleMeow implements Meowable 
{
    /**
     * Type of meowing.
     */
    public function meow(): string
    {
        return "I'm meowing simply.";
    }
}
