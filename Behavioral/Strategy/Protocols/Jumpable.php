<?php

namespace Patterns\Behavioral\Strategy\Protocols;

interface Jumpable
{
    /**
     * The ability to jump.
     */
    public function jump(): string;
}
