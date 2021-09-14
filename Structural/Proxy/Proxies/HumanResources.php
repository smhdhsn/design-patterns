<?php

namespace Patterns\Structural\Proxy\Proxies;

use Patterns\Structural\Proxy\Protocols\FireCapability;
use Patterns\Structural\Proxy\Subject\Boss;

class HumanResources implements FireCapability
{
    /**
     * Keeping track of warned employees.
     */
    public array $employees;

    /**
     * Reaching the Boss to fire a certain employee.
     */
    public function fire(string $employee): void
    {
        (new Boss)->fire($employee);
    }

    /**
     * Employee receives 3 warns before getting fired.
     */
    public function warn(string $employee): void
    {
        if (isset($this->employees[$employee])) {
            $this->employees[$employee] += 1;
        } else {
            $this->employees[$employee] = 1;
        }

        if ($this->employees[$employee] >= 3) {
            $this->fire($employee);
        } else {
            echo "Employee {$employee} received a warn." . PHP_EOL;
        }
    }
}
