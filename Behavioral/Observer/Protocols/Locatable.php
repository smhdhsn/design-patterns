<?php

namespace Patterns\Behavioral\Observer\Protocols;

interface Locatable
{
    /**
     * Adding a locator to the list of locators that seek an animal.
     */
    public function addLocator(Locator $locator): void;

    /**
     * Removing a locator from the list of locators that seek an animal.
     */
    public function removeLocator(Locator $locator): void;

    /**
     * Notifying the locators who seek the locatable animal that an animal is located.
     */
    public function notifyLocators(): void;
}
