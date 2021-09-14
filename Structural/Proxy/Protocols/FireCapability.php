<?php

namespace Patterns\Structural\Proxy\Protocols;

interface FireCapability
{
    /**
     * The ability to fire employees.
     */
    public function fire(string $employee): void;
}
