<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Decorator\Decorators\{SprinklesDecorator, CinnamonDecorator, CaramelDecorator};
use Patterns\Structural\Decorator\Beverages\{Espresso, Mocha};

$mahdiSpecial = new SprinklesDecorator(new CinnamonDecorator(new CaramelDecorator(new Espresso)));
echo "The cost of mahdi's special order is " . $mahdiSpecial->cost() . "$";
echo PHP_EOL;
echo $mahdiSpecial->description();
echo PHP_EOL;
