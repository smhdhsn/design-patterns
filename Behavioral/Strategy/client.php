<?php

use Patterns\Behavioral\Strategy\Behaviors\{
    Display\SimpleDisplay,
    Display\FancyDisplay,
    Quack\SimpleQuack,
    Meow\FancyMeow,
    Jump\FancyJump,
    Fly\SimpleFly
};

use Patterns\Behavioral\Strategy\Animals\{
    Duck, 
    Cat
};

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

/***********************************/
/** Actual client code starts here */
/***********************************/

CONST SPACE = "\x20";
CONST EOL = PHP_EOL;

/** Presenting a duck */
$duck = new Duck(new SimpleDisplay, new SimpleQuack, new SimpleFly);
echo "I'm a Duck,"
. SPACE
. $duck->display()
. SPACE
. $duck->quack()
. SPACE
. $duck->fly();

echo EOL;

/** Presenting a cat */
$cat = new Cat(new FancyDisplay, new FancyMeow, new FancyJump);
echo "I'm a Cat,"
. SPACE
. $cat->display()
. SPACE
. $cat->meow()
. SPACE
. $cat->jump();

echo EOL;
