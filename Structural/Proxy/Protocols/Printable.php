<?php

namespace Patterns\Structural\Proxy\Protocols;

interface Printable
{
    /**
     * The ability to get message to show in terminal.
     */
    public function getMessage(): string;
}
