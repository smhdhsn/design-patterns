<?php

namespace Patterns\Behavioral\State\States;

use Patterns\Behavioral\State\Protocols\{NonExplosiveWeaponryState as FirearmState, NonExplosiveWeapon as Firearm};

class Loaded implements FirearmState
{
    /**
     * Shooting weapon.
     */
    public function shoot(Firearm $weapon): FirearmState
    {
        echo "Bang!\n";

        return new Unloaded($weapon);
    }

    /**
     * Reloading weapon.
     */
    public function reload(Firearm $weapon): FirearmState
    {
        echo "Weapon is already loaded!\n";

        return $this;
    }
}