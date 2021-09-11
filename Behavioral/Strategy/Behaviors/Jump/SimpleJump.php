<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Jump;

use Patterns\Behavioral\Strategy\Protocols\Jumpable;

class SimpleJump implements Jumpable 
{
    /**
     * Type of jump.
     */
    public function jump(): string
    {
        return "I'm jumping simply.";
    }
}
