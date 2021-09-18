<?php

namespace Patterns\Behavioral\State\Protocols;

interface NonExplosiveWeapon
{
    /**
     * Every underlying weapon should be able to shoot.
     */
    public function shoot(): void;

    /**
     * Every underlying weapon should be able to be reloaded.
     */
    public function reload(): void;
}
