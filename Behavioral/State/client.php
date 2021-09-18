<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Behavioral\State\Weapons\Cannon;

$cannon = new Cannon;

$cannon->shoot();
$cannon->reload();
$cannon->shoot();
