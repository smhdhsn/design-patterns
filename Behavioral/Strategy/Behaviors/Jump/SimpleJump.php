<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Jump;

use Patterns\Behavioral\Strategy\Protocols\Jumpable;

/**
 * Type of jump.
 */
class SimpleJump implements Jumpable 
{
    public function jump(): string
    {
        return "I'm jumping simply.";
    }
}
