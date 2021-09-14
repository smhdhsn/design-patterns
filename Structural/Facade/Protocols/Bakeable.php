<?php

namespace Patterns\Structural\Facade\Protocols;

interface Bakeable
{
    /**
     * A menu item must be Bakeable.
     */
    public function bake(): void;
}
