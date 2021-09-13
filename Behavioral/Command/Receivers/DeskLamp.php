<?php

namespace Patterns\Behavioral\Command\Receivers;

class DeskLamp
{
    /**
     * Lamp's Name.
     */
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
