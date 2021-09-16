<?php

namespace Patterns\Structural\Composite\Protocols;

interface Nameable
{
    /**
     * Every company must be able to present their name.
     */
    public function getName(): string;
}
