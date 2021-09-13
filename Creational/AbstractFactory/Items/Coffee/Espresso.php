<?php

namespace Patterns\Creational\AbstractFactory\Items\Coffee;

use Patterns\Creational\AbstractFactory\Protocols\{Orderable, Sizeable};

class Espresso implements Orderable, Sizeable
{
    /**
     * Size of the Espresso.
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
