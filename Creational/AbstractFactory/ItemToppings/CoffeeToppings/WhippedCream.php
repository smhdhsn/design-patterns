<?php

namespace Patterns\Creational\AbstractFactory\ItemToppings\CoffeeToppings;

use Patterns\Creational\AbstractFactory\Protocols\Orderable;

class WhippedCream implements Orderable
{
    /**
     * Item's name.
     */
    public function getName(): string
    {
        return 'Whipped Cream';
    }
}
