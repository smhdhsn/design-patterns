<?php

namespace Patterns\Creational\AbstractFactory\Factories;

use Patterns\Creational\AbstractFactory\ItemToppings\CoffeeToppings\{CoconutMilk, VanillaExtract, WhippedCream};
use Patterns\Creational\AbstractFactory\Protocols\{Orderable, Creator};
use Patterns\Creational\AbstractFactory\Items\Coffee\{Espresso, Mocha};
use Exception;

class CoffeeFactory implements Creator
{
    /**
     * Creating the base of the Coffee.
     */
    public function createBase(string $type, string $size): Orderable
    {
        switch ($type) {
            case 'Espresso':
                return new Espresso($size);

            case 'Mocha':
                return new Mocha($size);

            default:
                throw new Exception('Undefined type of coffee.');
        }
    }

    /**
     * Creating the topping of the Coffee.
     */
    public function createTopping(string $type): Orderable
    {
        switch ($type) {
            case 'Coconut Milk':
                return new CoconutMilk;

            case 'Vanilla Extract':
                return new VanillaExtract;

            case 'Whipped Cream':
                return new WhippedCream;
            
            default:
                throw new Exception('Undefined type of coffee topping.');
        }
    }
}
