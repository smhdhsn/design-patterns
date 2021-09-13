<?php

namespace Patterns\Creational\AbstractFactory\ItemToppings\DonutToppings;

use Patterns\Creational\AbstractFactory\Protocols\Orderable;

class Cookie implements Orderable
{
    /**
     * Item's name.
     */
    public function getName(): string
    {
        return 'Cookie';
    }
}
