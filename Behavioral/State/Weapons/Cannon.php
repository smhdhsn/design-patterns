<?php

namespace Patterns\Behavioral\State\Weapons;

use Patterns\Behavioral\State\Protocols\{NonExplosiveWeaponryState as FirearmState, NonExplosiveWeapon as Firearm};
use Patterns\Behavioral\State\States\Unloaded;

class Cannon implements Firearm
{
    /**
     * State of the firearm.
     */
    private FirearmState $state;

    public function __construct()
    {
        $this->state = new Unloaded($this);
    }

    /**
     * Shooting the firearm.
     */
    public function shoot(): void
    {
        $this->state = $this->state->shoot($this);
    }

    /**
     * Reloading the firearm.
     */
    public function reload(): void
    {
        $this->state = $this->state->reload($this);
    }
}
