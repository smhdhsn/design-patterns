<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Creational\FactoryMethod\Factories\{CoffeeFactory, DonutFactory};

/*
Here is the menu:

Coffee

    Types         Size

    Decaf      [S, M, L]
    Espresso   [S, M, L]
    Mocha      [S, M, L]

Donut

    Types         Size

    Chocolate  [S, M, L]
    Kitkat     [S, M, L]
    Strawberry [S, M, L]
*/

$coffee = (new CoffeeFactory)->createOrder('Espresso', 'M');
$donut = (new DonutFactory)->createOrder('Chocolate', 'L');

echo 'Mahdi ordered a ' . $coffee->getSize() . ' size ' . $coffee->getName() . PHP_EOL;
echo 'Mahdi ordered a ' . $donut->getSize() . ' size ' . $donut->getName() . PHP_EOL;
