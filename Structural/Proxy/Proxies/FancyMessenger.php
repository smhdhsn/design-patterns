<?php

namespace Patterns\Structural\Proxy\Proxies;

use Patterns\Structural\Proxy\Protocols\Printable;
use Patterns\Structural\Proxy\Subject\Messenger;

class FancyMessenger implements Printable
{
    /**
     * Messenger's instance.
     */
    private Messenger $messenger;

    /**
     * Messenger's instance.
     */
    public function __construct(Messenger $messenger)
    {
        $this->messenger = $messenger;
    }

    /**
     * Adding additional properties to the messenger's message.
     */
    public function getMessage(): string
    {
        return "\033[31m\033[6m{$this->messenger->getMessage()}\033[0m";
    }
}
