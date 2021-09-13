<?php

namespace Patterns\Creational\AbstractFactory\Items\Donut;

use Patterns\Creational\AbstractFactory\Protocols\{Orderable, Sizeable};

class Strawberry implements Orderable, Sizeable
{
    /**
     * Size of the Donut.
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
