<?php

namespace Patterns\Behavioral\Strategy\Behaviors\Display;

use Patterns\Behavioral\Strategy\Protocols\Displayable;

/**
 * Type of displaying.
 */
class FancyDisplay implements Displayable 
{
    public function display(): string
    {
        return "I'm being displayed fancily.";
    }
}
