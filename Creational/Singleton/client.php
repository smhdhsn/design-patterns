<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Creational\Singleton\King\King;

$king1 = King::getKing();
$king2 = King::getKing();

var_dump($king1 === $king2);
