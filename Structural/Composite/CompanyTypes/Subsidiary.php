<?php

namespace Patterns\Structural\Composite\CompanyTypes;

use Patterns\Structural\Composite\Protocols\{Calculable, Nameable};

class Subsidiary implements Calculable, Nameable
{
    /**
     * Subsidiary's information.
     */
    private string $companyName;
    private int $companyIncome;

    public function __construct(string $companyName, int $companyIncome)
    {
        $this->companyIncome = $companyIncome;
        $this->companyName = $companyName;
    }

    /**
     * Calculating company's income.
     */
    public function calculateIncome(): int
    {
        return $this->companyIncome;
    }

    /**
     * Company's name.
     */
    public function getName(): string
    {
        return $this->companyName;
    }
}
