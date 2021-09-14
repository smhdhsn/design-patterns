<?php

namespace Patterns\Structural\Adapter\Protocols;

interface EnglishLanguage
{
    /**
     * English greeting.
     */
    public function greeting(): void;
}
