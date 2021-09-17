<?php

namespace Patterns\Behavioral\Iterator\Protocols;

interface Item
{
    /**
     * Every item must have a way to present its title.
     */
    public function getTitle(): string;

    /**
     * Every item must have a way to present its description.
     */
    public function getDescription(): string;
}
