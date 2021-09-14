<?php

namespace Patterns\Structural\Facade\Ingredients;

use Patterns\Structural\Facade\Protocols\Addable;

class Crust implements Addable
{
    public function add(): void
    {
        echo 'Added Crust';
    }
}
