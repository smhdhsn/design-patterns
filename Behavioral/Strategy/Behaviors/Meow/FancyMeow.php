<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Meow;

use Patterns\Behavioral\Strategy\Protocols\Meowable;

class FancyMeow implements Meowable 
{
    /**
     * Type of meowing.
     */
    public function meow(): string
    {
        return "I'm meowing fancily.";
    }
}
