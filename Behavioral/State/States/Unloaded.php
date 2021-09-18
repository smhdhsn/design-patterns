<?php

namespace Patterns\Behavioral\State\States;

use Patterns\Behavioral\State\Protocols\{NonExplosiveWeaponryState as FirearmState, NonExplosiveWeapon as Firearm};

class Unloaded implements FirearmState
{
    /**
     * Shooting weapon.
     */
    public function shoot(Firearm $weapon): FirearmState
    {
        echo "Reload the weapon!\n";

        return $this;
    }

    /**
     * Reloading weapon.
     */
    public function reload(Firearm $weapon): FirearmState
    {
        echo "Weapon is loaded!\n";

        return new Loaded($weapon);
    }
}