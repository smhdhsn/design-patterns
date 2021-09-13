<?php

namespace Patterns\Behavioral\Command\Protocols;

interface Command
{
    /**
     * Every command should have an execute command.
     */
    public function execute(): void;

    /**
     * Every command should have an unexecute command.
     */
    public function unexecute(): void;
}
