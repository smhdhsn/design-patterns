<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Proxy\Proxies\FancyMessenger;
use Patterns\Structural\Proxy\Subject\Messenger;

$messenger = new FancyMessenger(new Messenger);

echo $messenger->getMessage();
