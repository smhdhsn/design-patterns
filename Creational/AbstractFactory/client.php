<?php

use Patterns\Creational\AbstractFactory\Factories\{
    CoffeeFactory,
    DonutFactory
};

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

/***********************************/
/** Actual client code starts here */
/***********************************/

/*
Here is the menu:

Coffee

    Types         Size                         Topping

    Espresso   [S, M, L]   [Coconut Milk, Vanilla Extract, Whipped Cream]
    Mocha      [S, M, L]   [Coconut Milk, Vanilla Extract, Whipped Cream]

Donut

    Types         Size              Topping

    Chocolate  [S, M, L]   [Cookie, Jello, Marshmallow]
    Strawberry [S, M, L]   [Cookie, Jello, Marshmallow]
*/

$coffeeFactory = new CoffeeFactory;
$coffeeBase = $coffeeFactory->createBase('Espresso', 'M');
$coffeeTopping = $coffeeFactory->createTopping('Coconut Milk');

echo 'Mahdi ordered a ' . $coffeeBase->getSize() . ' size ' . $coffeeBase->getName() . ' with ' . $coffeeTopping->getName() . ' toppings.' . PHP_EOL;

$donutFactory = new DonutFactory;
$donutBase = $donutFactory->createBase('Chocolate', 'L');
$donutTopping = $donutFactory->createTopping('Marshmallow');

echo 'Mahdi ordered a ' . $donutBase->getSize() . ' size ' . $donutBase->getName() . ' with ' . $donutTopping->getName() . ' toppings.' . PHP_EOL;
