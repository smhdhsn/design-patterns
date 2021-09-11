<?php

namespace Patterns\Behavioral\Observer\Protocols;

interface Locator
{
    /**
     * Locating the target.
     */
    public function locateTarget(): void;
}
