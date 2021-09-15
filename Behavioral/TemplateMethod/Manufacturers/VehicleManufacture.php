<?php

namespace Patterns\Behavioral\TemplateMethod\Manufacturers;

abstract class VehicleManufacture
{
    final public function build(): void
    {
        $enginePower = $this->getEnginePower();
        $brand = $this->getBrand();

        echo "This vehicle is built by {$brand}, and is powered by a {$enginePower}HP engine.\n";
    }

    /**
     * A car needs to be presented with a brand.
     */
    abstract protected function getBrand(): string;

    /**
     * A car needs engine in order to be functional.
     */
    abstract protected function getEnginePower(): string;
}
