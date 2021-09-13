<?php

namespace Patterns\Behavioral\Command\Commands;

use Patterns\Behavioral\Command\Protocols\Command;

class On implements Command
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
        echo "Executing the command \"On\" on {$this->receiver->name}." . PHP_EOL;
    }

    /**
     * Unexecuting command.
     */
    public function unexecute(): void
    {
        echo "Unexecuting the command \"On\" on {$this->receiver->name}." . PHP_EOL;
    }
}
