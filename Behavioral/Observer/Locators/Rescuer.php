<?php

namespace Patterns\Behavioral\Observer\Locators;

use Patterns\Behavioral\Observer\Protocols\{Locatable, Locator};

class Rescuer implements Locator
{
    /**
     * Instance of the target.
     */
    protected Locatable $target;

    /**
     * Rescuer's name.
     */
    protected string $rescuerName;

    public function __construct(Locatable $target, string $rescuerName)
    {
        $this->target = $target;
        $this->rescuerName = $rescuerName;
    }

    /**
     * Locating the target and begining rescue mission.
     */
    public function locateTarget(): void
    {
        echo "This is {$this->rescuerName}, On my way to rescue the {$this->target->targetType}." . PHP_EOL;
    }
}
