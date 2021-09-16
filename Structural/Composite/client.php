<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Structural\Composite\CompanyTypes\{ParentCompany, Subsidiary};

/*
Here is the Volkswagen company's hierarchy:

Volkswagen
    Audi
        Lamborghini
            Ducati
    Porsche
        Bugatti
    Bentley
*/

/** Defining Volkswagen hierarchy */
$volkswagen = new ParentCompany('Volkswagen', 0, [
    $audi = new ParentCompany('Audi', 49, [
        $lamborghini = new ParentCompany('Lamborghini', 1610, [
            $ducati = new Subsidiary('Ducati', 676)
        ])
    ]),

    $porsche = new ParentCompany('Porsche', 3414, [
        $bugatti = new Subsidiary('Bugatti', 337)
    ]),

    $bentley = new Subsidiary('Bentley', 800)
]);

$companyIncome = $volkswagen->calculateIncome() / 1000;
$companyName = $volkswagen->getName();
echo "{$companyName} company has produced roughly {$companyIncome} billion dollars in year 2020\n";
