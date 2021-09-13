<?php

namespace Patterns\Behavioral\Command\Commands;

use Patterns\Behavioral\Command\Protocols\Command;

class DimDown implements Command
{
    /**
     * Reciever's instance.
     */
    private object $receiver;

    public function __construct(object $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Executing command.
     */
    public function execute(): void
    {
        echo "Executing the command \"Dim Down\" on {$this->receiver->name}." . PHP_EOL;
    }

    /**
     * Unexecuting command.
     */
    public function unexecute(): void
    {
        echo "Unexecuting the command \"Dim Down\" on {$this->receiver->name}." . PHP_EOL;
    }
}
