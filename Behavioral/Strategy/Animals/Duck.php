<?php

namespace Patterns\Behavioral\Strategy\Animals;

use Patterns\Behavioral\Strategy\Protocols\{Displayable, Quackable, Flyable};

/**
 * Duck class.
 * 
 * Has to be able to be displayed.
 * Has to be able to quack.
 * Has to be able to fly.
 */
class Duck implements Displayable, Quackable, Flyable
{
    public Displayable $displaying;
    public Quackable $quacking;
    public Flyable $flying;

    /**
     * Injecting proper behaviors into the duck class when instantiating it.
     */
    public function __construct(Displayable $displaying, Quackable $quacking, Flyable $flying)
    {
        $this->displaying = $displaying;
        $this->quacking = $quacking;
        $this->flying = $flying;
    }

    /**
     * The ability to be displayed.
     */
    public function display(): string
    {
        return $this->displaying->display();
    }

    /**
     * The ability to quack.
     */
    public function quack(): string
    {
        return $this->quacking->quack();
    }

    /**
     * The ability to fly.
     */
    public function fly(): string
    {
        return $this->flying->fly();
    }
}
