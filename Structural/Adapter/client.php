<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Adapter\Languages\{Deutsch, Dutch};
use Patterns\Structural\Adapter\Adapters\Translator;

$translator = new Translator(new Deutsch, new Dutch);
$translator->greeting();
