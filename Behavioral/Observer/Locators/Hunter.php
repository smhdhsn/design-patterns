<?php

namespace Patterns\Behavioral\Observer\Locators;

use Patterns\Behavioral\Observer\Protocols\{Locatable, Locator};

class Hunter implements Locator
{
    /**
     * Instance of the target.
     */
    protected Locatable $target;

    /**
     * Hunter's name.
     */
    protected string $hunterName;

    public function __construct(Locatable $target, string $hunterName)
    {
        $this->target = $target;
        $this->hunterName = $hunterName;
    }

    /**
     * Locating the hunt and starting to hunt.
     */
    public function locateTarget(): void
    {
        echo "This is {$this->hunterName}, On my way to hunt down the {$this->target->targetType}." . PHP_EOL;
    }
}
