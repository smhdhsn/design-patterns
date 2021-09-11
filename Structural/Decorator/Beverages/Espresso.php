<?php

namespace Patterns\Structural\Decorator\Beverages;

use Patterns\Structural\Decorator\Abstracts\AbstractBeverage;

class Espresso extends AbstractBeverage
{
    /**
     * Cost of an Espresso.
     */
    CONST COST = 20;

    /**
     * Getting the cost of the Espresso.
     */
    public function cost(): int
    {
        return self::COST;
    }

    /**
     * Getting a description about the Espresso.
     */
    public function description(): string
    {
        return 'This is an Espresso.';
    }
}
