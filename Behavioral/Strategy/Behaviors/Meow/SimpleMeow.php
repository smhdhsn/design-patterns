<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Meow;

use Patterns\Behavioral\Strategy\Protocols\Meowable;

/**
 * Type of meowing.
 */
class SimpleMeow implements Meowable 
{
    public function meow(): string
    {
        return "I'm meowing simply.";
    }
}
