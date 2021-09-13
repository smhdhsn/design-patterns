<?php

namespace Patterns\Behavioral\Command\Invokers;

use Patterns\Behavioral\Command\Protocols\Command;

class SingleReceiverController
{
    /**
     * Buttons of this controller which are responsible for triggering certain commands.
     */
    private Command $dimDown;
    private Command $dimUp;
    private Command $off;
    private Command $on;

    public function __construct(Command $dimDown, Command $dimUp, Command $off, Command $on)
    {
        $this->dimDown = $dimDown;
        $this->dimUp = $dimUp;
        $this->off = $off;
        $this->on = $on;
    }

    /**
     * Unexecuting "Dim Down" command.
     */
    public function undoDimDown(): void
    {
        $this->dimDown->unexecute();
    }

    /**
     * Executing "Dim Down" command.
     */
    public function dimDown(): void
    {
        $this->dimDown->execute();
    }

    /**
     * Unexecuting "Dim Up" command.
     */
    public function undoDimUp(): void
    {
        $this->dimUp->unexecute();
    }

    /**
     * Executing "Dim Up" command.
     */
    public function dimUp(): void
    {
        $this->dimUp->execute();
    }

    /**
     * Unexecuting "Off" command.
     */
    public function undoOff(): void
    {
        $this->off->unexecute();
    }

    /**
     * Executing "Off" command.
     */
    public function off(): void
    {
        $this->off->execute();
    }

    /**
     * Unexecuting "On" command.
     */
    public function undoOn(): void
    {
        $this->on->unexecute();
    }

    /**
     * Executing "On" command.
     */
    public function on(): void
    {
        $this->on->execute();
    }
}
