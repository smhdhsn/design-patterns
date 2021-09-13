<?php

namespace Patterns\Creational\AbstractFactory\ItemToppings\CoffeeToppings;

use Patterns\Creational\AbstractFactory\Protocols\Orderable;

class VanillaExtract implements Orderable
{
    /**
     * Item's name.
     */
    public function getName(): string
    {
        return 'Vanilla Extract';
    }
}
