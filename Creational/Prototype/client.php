<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Creational\Prototype\Homeworks\Math;

/** Mahdi actually doing homeworks */
$mahdiHomework = new Math(
    'Mahdi',
    "1+1=5\n2+2=20\n3+3=45\n4+4=45\n5+5=?\nThe answear is 80  because (4*4)*5=80"
);

echo $mahdiHomework->getHomeworkPaper();

/***************/
/** Seperator */
/***************/
echo PHP_EOL;

/** Adam copying Mahdi's homework which is of the same type but with different content */
$adamHomework = clone $mahdiHomework;

echo $adamHomework->getHomeworkPaper();
