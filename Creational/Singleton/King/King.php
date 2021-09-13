<?php

namespace Patterns\Creational\Singleton\King;

class King
{
    /**
     * A realm must have only one king.
     */
    private static King $king;

    /**
     * Making the constructor private so that it would be impossible to instantiate 
     * this class from outside of the class.
     */
    private function __construct() {}

    /**
     * If the instance is not present, create the instance and return the instance
     */
    public static function getKing(): King
    {
        if (! isset(self::$king))
            self::$king = new King;

        return self::$king;
    }
}
