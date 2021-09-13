<?php

namespace Patterns\Creational\AbstractFactory\Factories;

use Patterns\Creational\AbstractFactory\ItemToppings\DonutToppings\{Cookie, Jello, Marshmallow};
use Patterns\Creational\AbstractFactory\Items\Donut\{Strawberry, Chocolate};
use Patterns\Creational\AbstractFactory\Protocols\{Orderable, Creator};
use Exception;

class DonutFactory implements Creator
{
    /**
     * Creating the base of the Donut.
     */
    public function createBase(string $type, string $size): Orderable
    {
        switch ($type) {
            case 'Strawberry':
                return new Strawberry($size);

            case 'Chocolate':
                return new Chocolate($size);

            default:
                throw new Exception('Undefined type of donut.');
        }
    }

    /**
     * Creating the topping of the Donut.
     */
    public function createTopping(string $type): Orderable
    {
        switch ($type) {
            case 'Cookie':
                return new Cookie;

            case 'Jello':
                return new Jello;

            case 'Marshmallow':
                return new Marshmallow;
            
            default:
                throw new Exception('Undefined type of donut topping.');
        }
    }
}
