<?php

namespace Patterns\Creational\FactoryMethod\Coffee;

use Patterns\Creational\FactoryMethod\Protocols\Orderable;

class Espresso implements Orderable
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
        return 'Espresso';
    }

    /**
     * Item's size.
     */
    public function getSize(): string
    {
        return $this->size;
    }
}
