<?php

namespace Patterns\Creational\FactoryMethod\Factories;

use Patterns\Creational\FactoryMethod\Coffee\{Espresso, Decaf, Mocha};
use Patterns\Creational\FactoryMethod\Protocols\{Orderable, Creator};
use Exception;

class CoffeeFactory implements Creator
{
    /**
     * Creating Order.
     */
    public function createOrder(string $item, string $size): Orderable
    {
        switch (strtolower($item)) {
            case 'decaf':
                return new Decaf($size);

            case 'espresso':
                return new Espresso($size);

            case 'mocha':
                return new Mocha($size);
            
            default:
                throw new Exception('Undefined type of Coffee.');
        }
    }
}
