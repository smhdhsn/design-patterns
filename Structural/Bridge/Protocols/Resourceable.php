<?php

namespace Patterns\Structural\Bridge\Protocols;

interface Resourceable
{
    /**
     * A resource must have a way to present its subject's url.
     */
    public function url(): string;

    /**
     * A resource must have a way to present its subject's title.
     */
    public function title(): string;

    /**
     * A resource must have a way to present its subject's description.
     */
    public function description(): string;
}
