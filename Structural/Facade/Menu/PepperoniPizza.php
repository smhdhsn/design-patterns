<?php

namespace Patterns\Structural\Facade\Menu;

use Patterns\Structural\Facade\Ingredients\{ChillyPowder, Pepperoni, Cheese, Crust, Olive};
use Patterns\Structural\Facade\Protocols\{Bakeable, Addable};

class PepperoniPizza implements Bakeable
{
    /**
     * Ingredients of the pepperoni pizza.
     */
    public Addable $chillyPowder;
    public Addable $pepperoni;
    public Addable $cheese;
    public Addable $olive;
    public Addable $crust;

    public function __construct()
    {
        $this->chillyPowder = new ChillyPowder;
        $this->pepperoni = new Pepperoni;
        $this->cheese = new Cheese;
        $this->crust = new Crust;
        $this->olive = new Olive;
    }

    public function bake(): void
    {
        echo 'Making Pizza' . PHP_EOL;

        $this->crust->add();
        $this->olive->add();
        $this->cheese->add();
        $this->pepperoni->add();
        $this->chillyPowder->add();

        echo '.' . PHP_EOL;
    }
}
