<?php

namespace Patterns\Behavioral\State\Protocols;

interface NonExplosiveWeaponryState
{
    /**
     * Every underlying weapon should be able to shoot when they're loaded.
     */
    public function shoot(NonExplosiveWeapon $weapon): NonExplosiveWeaponryState;

    /**
     * Every underlying weapon should be able to be reloaded when they're empty.
     */
    public function reload(NonExplosiveWeapon $weapon): NonExplosiveWeaponryState;
}
