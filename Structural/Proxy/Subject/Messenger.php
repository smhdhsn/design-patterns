<?php

namespace Patterns\Structural\Proxy\Subject;

use Patterns\Structural\Proxy\Protocols\Printable;

class Messenger implements Printable
{
    /**
     * Returning a simple message.
     */
    public function getMessage(): string
    {
        return "Hey there.\n";
    }
}
