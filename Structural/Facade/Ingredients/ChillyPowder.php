<?php

namespace Patterns\Structural\Facade\Ingredients;

use Patterns\Structural\Facade\Protocols\Addable;

class ChillyPowder implements Addable
{
    public function add(): void
    {
        echo ', added Chilly Powder';
    }
}
