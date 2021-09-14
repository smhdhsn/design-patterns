<?php

namespace Patterns\Structural\Facade\Ingredients;

use Patterns\Structural\Facade\Protocols\Addable;

class Olive implements Addable
{
    public function add(): void
    {
        echo ', added Olive';
    }
}
