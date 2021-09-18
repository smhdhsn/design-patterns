<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Creational\Builder\Builders\CarBuilder;

$audi = (new CarBuilder('Audi'))
    ->setModel('R8')
    ->build();

echo $audi->getBrand();
echo $audi->getModel();
