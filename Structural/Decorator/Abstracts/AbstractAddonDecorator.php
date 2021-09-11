<?php

namespace Patterns\Structural\Decorator\Abstracts;

abstract class AbstractAddonDecorator extends AbstractBeverage
{
    /**
     * Beverage has cost.
     */
    abstract public function cost(): int;

    /**
     * Beverage has description.
     */
    abstract public function description(): string;
}
