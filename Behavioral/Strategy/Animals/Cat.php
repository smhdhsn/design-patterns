<?php

namespace Patterns\Behavioral\Strategy\Animals;

use Patterns\Behavioral\Strategy\Protocols\{Displayable, Meowable, Jumpable};

/**
 * Cat class.
 * 
 * Has to be able to be displayed.
 * Has to be able to meow.
 * Has to be able to jump.
 */
class Cat implements Displayable, Meowable, Jumpable
{
    public Displayable $displaying;
    public Meowable $meowing;
    public Jumpable $jumping;

    /**
     * Injecting proper behaviors into the cat class when instantiating it.
     */
    public function __construct(Displayable $displaying, Meowable $meowing, Jumpable $jumping)
    {
        $this->displaying = $displaying;
        $this->meowing = $meowing;
        $this->jumping = $jumping;
    }

    /**
     * The ability to be displayed.
     */
    public function display(): string
    {
        return $this->displaying->display();
    }

    /**
     * The ability to meow.
     */
    public function meow(): string
    {
        return $this->meowing->meow();
    }

    /**
     * The ability to jump.
     */
    public function jump(): string
    {
        return $this->jumping->jump();
    }
}
