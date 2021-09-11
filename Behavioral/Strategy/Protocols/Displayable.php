<?php

namespace Patterns\Behavioral\Strategy\Protocols;

interface Displayable
{
    /**
     * The ability to be displayed.
     */
    public function display(): string;
}
