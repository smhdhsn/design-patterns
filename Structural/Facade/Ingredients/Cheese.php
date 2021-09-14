<?php

namespace Patterns\Structural\Facade\Ingredients;

use Patterns\Structural\Facade\Protocols\Addable;

class Cheese implements Addable
{
    public function add(): void
    {
        echo ', added Cheese';
    }
}
