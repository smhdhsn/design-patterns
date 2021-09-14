<?php

namespace Patterns\Structural\Facade\Ingredients;

use Patterns\Structural\Facade\Protocols\Addable;

class Pepperoni implements Addable
{
    public function add(): void
    {
        echo ', added Pepperoni Meat';
    }
}
