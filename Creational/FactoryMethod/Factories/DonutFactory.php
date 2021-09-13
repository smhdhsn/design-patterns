<?php

namespace Patterns\Creational\FactoryMethod\Factories;

use Patterns\Creational\FactoryMethod\Donuts\{Chocolate, Strawberry, Kitkat};
use Patterns\Creational\FactoryMethod\Protocols\{Orderable, Creator};
use Exception;

class DonutFactory implements Creator
{
    /**
     * Creating Order.
     */
    public function createOrder(string $item, string $size): Orderable
    {
        switch (strtolower($item)) {
            case 'chocolate':
                return new Chocolate($size);

            case 'kitkat':
                return new Kitkat($size);

            case 'strawberry':
                return new Strawberry($size);
            
            default:
                throw new Exception('Undefined type of Donut.');
        }
    }
}
