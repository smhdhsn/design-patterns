<?php

namespace Patterns\Structural\Facade\PizzaPlace;

use Patterns\Structural\Facade\Menu\PepperoniPizza;
use Exception;

class PizzaHut
{
    public static function order(string $type): void
    {
        switch ($type) {
            case 'Pepperoni':
                (new PepperoniPizza)->bake();
            break;

            default:
                throw new Exception('Undefined type of Pizza.');
        }
    }
}
