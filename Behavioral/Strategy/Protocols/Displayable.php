<?php

namespace Patterns\Behavioral\Strategy\Protocols;

/**
 * The ability to be displayed.
 */
interface Displayable
{
    public function display(): string;
}
