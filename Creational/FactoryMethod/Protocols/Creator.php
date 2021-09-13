<?php

namespace Patterns\Creational\FactoryMethod\Protocols;

interface Creator
{
    /**
     * Factory must be able to serve Coffee|Donut.
     */
    public function createOrder(string $item, string $size): Orderable;
}
