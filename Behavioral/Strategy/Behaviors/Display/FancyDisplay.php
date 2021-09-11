<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Display;

use Patterns\Behavioral\Strategy\Protocols\Displayable;

class FancyDisplay implements Displayable 
{
    /**
     * Type of displaying.
     */
    public function display(): string
    {
        return "I'm being displayed fancily.";
    }
}
