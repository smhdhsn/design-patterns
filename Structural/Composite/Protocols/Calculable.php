<?php

namespace Patterns\Structural\Composite\Protocols;

interface Calculable
{
    /**
     * Every company must produce a way to calculate their income.
     */
    public function calculateIncome(): int;
}