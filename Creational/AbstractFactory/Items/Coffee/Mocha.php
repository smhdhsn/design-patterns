<?php

namespace Patterns\Creational\AbstractFactory\Items\Coffee;

use Patterns\Creational\AbstractFactory\Protocols\{Orderable, Sizeable};

class Mocha implements Orderable, Sizeable
{
    /**
     * Size of the Mocha.
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
        return 'Mocha';
    }

    /**
     * Item's size.
     */
    public function getSize(): string
    {
        return $this->size;
    }
}
