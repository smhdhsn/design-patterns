<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Proxy\Proxies\HumanResources;

$alex = new HumanResources;

$alex->warn('Adam Schindler');
$alex->warn('Adam Schindler');
$alex->warn('Adam Schindler');
