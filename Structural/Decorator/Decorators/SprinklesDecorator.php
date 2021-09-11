<?php

namespace Patterns\Structural\Decorator\Decorators;

use Patterns\Structural\Decorator\Abstracts\AbstractAddonDecorator;

class SprinklesDecorator extends AbstractAddonDecorator
{
    /**
     * Instance of a beverage or a decorator of a beverage.
     */
    public $beverage;

    /**
     * Cost of Sprinkles addon.
     */
    CONST COST = 2;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * Calculating the cost of the Beverage + Addon.
     */
    public function cost(): int
    {
        return $this->beverage->cost() + self::COST;
    }

    /**
     * Generating a descrioprion for the Beverage.
     */
    public function description(): string
    {
        return $this->beverage->description() . ' It has Sprinkles topping.';
    }
}
