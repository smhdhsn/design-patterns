<?php

namespace Patterns\Structural\Proxy\Subject;

use Patterns\Structural\Proxy\Protocols\FireCapability;

class Boss implements FireCapability
{
    /**
     * Firing the employee  :(
     */
    public function fire(string $employee): void
    {
        echo "Employee {$employee} has been fired." . PHP_EOL;
    }
}
