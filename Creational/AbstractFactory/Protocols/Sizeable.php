<?php

namespace Patterns\Creational\AbstractFactory\Protocols;

interface Sizeable
{
    /**
     * Every base item must have a size.
     */
    public function getSize(): string;
}
