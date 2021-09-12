<?php

namespace Patterns\Creational\FactoryMethod\Donuts;

use Patterns\Creational\FactoryMethod\Protocols\Orderable;

class Strawberry implements Orderable
{
    /**
     * Size of the order.
     */
    public string $size;

    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * Item's name.
     */
    public function getName(): string
    {
        return 'Strawberry';
    }

    /**
     * Item's size.
     */
    public function getSize(): string
    {
        return $this->size;
    }
}
