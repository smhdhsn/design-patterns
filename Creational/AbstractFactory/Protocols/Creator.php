<?php

namespace Patterns\Creational\AbstractFactory\Protocols;

interface Creator
{
    /**
     * The base type of the orderable item.
     */
    public function createBase(string $type, string $size): Orderable;

    /**
     * The topping of the orderable item.
     */
    public function createTopping(string $type): Orderable;
}
