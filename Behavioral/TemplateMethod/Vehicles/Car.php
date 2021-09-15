<?php

namespace Patterns\Behavioral\TemplateMethod\Vehicles;

use Patterns\Behavioral\TemplateMethod\Manufacturers\VehicleManufacture;

class Car extends VehicleManufacture
{
    /**
     * Car's information.
     */
    private string $brand;
    private string $power;

    public function __construct(string $brand, string $power)
    {
        $this->brand = $brand;
        $this->power = $power;
    }

    /**
     * Car's brand.
     */
    protected function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Car's engine power.
     */
    protected function getEnginePower(): string
    {
        return $this->power;
    }
}
