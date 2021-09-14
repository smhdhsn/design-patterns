<?php

namespace Patterns\Structural\Adapter\Languages;

use Patterns\Structural\Adapter\Protocols\NederlandseTaal;

class Dutch implements NederlandseTaal
{
    /**
     * Nederlandse groet.
     */
    public function groet(): void
    {
        echo 'Hallo, Goedenavond!' . PHP_EOL;
    }
}
