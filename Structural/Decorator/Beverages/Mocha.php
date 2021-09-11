<?php

namespace Patterns\Structural\Decorator\Beverages;

use Patterns\Structural\Decorator\Abstracts\AbstractBeverage;

class Mocha extends AbstractBeverage
{
    /**
     * Cost of an Mocha.
     */
    CONST COST = 25;

    /**
     * Getting the cost of the Mocha.
     */
    public function cost(): int
    {
        return self::COST;
    }

    /**
     * Getting a description about the Mocha.
     */
    public function description(): string
    {
        return 'This is an Mocha.';
    }
}
