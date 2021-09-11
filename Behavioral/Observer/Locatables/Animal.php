<?php

namespace Patterns\Behavioral\Observer\Locatables;

use Patterns\Behavioral\Observer\Protocols\{Locatable, Locator};

class Animal implements Locatable
{
    /**
     * Animal's type.
     */
    public string $targetType;

    /**
     * List of locators who seek the Animal.
     */
    public array $locators;

    public function __construct(string $targetType)
    {
        $this->targetType = $targetType;
    }

    /**
     * Adding a locator to the list of locators that seek the animal.
     */
    public function addLocator(Locator $locator): void
    {
        $this->locators[] = $locator;
    }

    /**
     * Removing a locator from the list of locators that seek the animal.
     */
    public function removeLocator(Locator $locator): void
    {
        if(($key = array_search($locator, $this->locators, true))) {
            unset($this->locators[$key]);
        }
    }

    /**
     * Notifying the locators who seek the locatable animal that an animal is located.
     */
    public function notifyLocators(): void
    {
        foreach ($this->locators as $locator) {
            $locator->locateTarget();
        }
    }
}
