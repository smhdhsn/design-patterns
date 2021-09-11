<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Jump;

use Patterns\Behavioral\Strategy\Protocols\Jumpable;

class FancyJump implements Jumpable 
{
    /**
     * Type of jump.
     */
    public function jump(): string
    {
        return "I'm jumping fancily.";
    }
}
