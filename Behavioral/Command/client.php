<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Behavioral\Command\Commands\{DimDown, DimUp, Off, On};
use Patterns\Behavioral\Command\Invokers\SingleReceiverController;
use Patterns\Behavioral\Command\Receivers\DeskLamp;

$lamp = new DeskLamp('#philips-white-01');

$deskLamp = new SingleReceiverController(
    new DimDown($lamp),
    new DimUp($lamp),
    new Off($lamp),
    new On($lamp)
);

$deskLamp->on();
