<?php

namespace Patterns\Creational\AbstractFactory\ItemToppings\CoffeeToppings;

use Patterns\Creational\AbstractFactory\Protocols\Orderable;

class CoconutMilk implements Orderable
{
    /**
     * Item's name.
     */
    public function getName(): string
    {
        return 'Coconut Milk';
    }
}
