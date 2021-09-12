<?php

namespace Patterns\Creational\FactoryMethod\Protocols;

interface Orderable
{
    /**
     * Every item must have a name.
     */
    public function getName(): string;

    /**
     * Every item must have a size.
     */
    public function getSize(): string;
}
