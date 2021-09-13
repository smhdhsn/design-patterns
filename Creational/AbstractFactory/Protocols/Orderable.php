<?php

namespace Patterns\Creational\AbstractFactory\Protocols;

interface Orderable
{
    /**
     * Every item must have a name.
     */
    public function getName(): string;
}
