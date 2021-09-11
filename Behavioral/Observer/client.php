<?php

use Patterns\Behavioral\Observer\Locatables\Animal;

use Patterns\Behavioral\Observer\Locators\{
    Rescuer,
    Hunter
};

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

/***********************************/
/** Actual client code starts here */
/***********************************/

/** Observers, observing the Animal */
$tiger = new Animal('Tiger');

$adam = new Hunter($tiger, 'Adam');
$tiger->addLocator($adam);

$mia = new Rescuer($tiger, 'Mia');
$tiger->addLocator($mia);

/** Should be triggered after the Animal has been located */
$tiger->notifyLocators();
