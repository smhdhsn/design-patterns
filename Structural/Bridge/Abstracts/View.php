<?php

namespace Patterns\Structural\Bridge\Abstracts;

use Patterns\Structural\Bridge\Protocols\Resourceable;

abstract class View
{
    /**
     * Instance of resource.
     */
    public Resourceable $resource;

    public function __construct(Resourceable $resource)
    {
        $this->resource = $resource;
    }

    /**
     * Concrete views must be able to show the details of the passed resource.
     */
    abstract public function show(): void;
}
