<?php

namespace Patterns\Creational\Builder\Builders;

use Patterns\Creational\Builder\Vehicles\Car;

class CarBuilder
{
    /**
     * Car's instance.
     */
    private Car $car;

    public function __construct(string $brand)
    {
        $this->car = new Car($brand);
    }

    /**
     * Setting building vehicle's model.
     */
    public function setModel(string $model): CarBuilder
    {
        $this->car->setModel($model);

        return $this;
    }

    /**
     * Getting instance of builder car.
     */
    public function build(): Car
    {
        return $this->car;
    }
}
