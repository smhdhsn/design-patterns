<?php

namespace Patterns\Structural\Adapter\Languages;

use Patterns\Structural\Adapter\Protocols\DeutscheSprache;

class Deutsch implements DeutscheSprache
{
    /**
     * Deutscher Gruß.
     */
    public function gruß(): void
    {
        echo 'Hallo, Guten Abend!' . PHP_EOL;
    }
}
