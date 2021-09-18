<?php

namespace Patterns\Creational\Builder\Vehicles;

class Car
{
    /**
     * Car's information.
     */
    private ?string $model;
    private string $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Setting vehicle's model.
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * Vehicle's brand.
     */
    public function getBrand(): string
    {
        return "This vehicle is of brand {$this->brand}.\n";
    }

    /**
     * Vehicle's model.
     */
    public function getModel(): ?string
    {
        return $this->model 
        ? "This vehicle is of model {$this->model}.\n"
        : "This vehicle doesn't have any brand.\n";
    }
}
