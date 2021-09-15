<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Behavioral\TemplateMethod\Vehicles\Car;

$car = new Car(
    'General Motors',
    '1000'
);

$car->build();
