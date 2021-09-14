<?php

namespace Patterns\Structural\Adapter\Adapters;

use Patterns\Structural\Adapter\Protocols\{EnglishLanguage, DeutscheSprache, NederlandseTaal};

class Translator implements EnglishLanguage
{
    /**
     * Main language of Netherlands.
     */
    private NederlandseTaal $dutch;

    /**
     * Main language of Germany.
     */
    private DeutscheSprache $deutsch;

    public function __construct(DeutscheSprache $deutsch, NederlandseTaal $dutch)
    {
        $this->deutsch = $deutsch;
        $this->dutch = $dutch;
    }

    public function greeting(): void
    {
        $this->deutsch->gruß();
        $this->dutch->groet();
    }
}
