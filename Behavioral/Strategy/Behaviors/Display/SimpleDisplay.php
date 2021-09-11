<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Display;

use Patterns\Behavioral\Strategy\Protocols\Displayable;

class SimpleDisplay implements Displayable
{
    /**
     * Type of displaying.
     */
    public function display(): string
    {
        return "I'm being displayed simply.";
    }
}
