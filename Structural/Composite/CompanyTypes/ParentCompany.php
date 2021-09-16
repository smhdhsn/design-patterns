<?php

namespace Patterns\Structural\Composite\CompanyTypes;

use Patterns\Structural\Composite\Protocols\{Calculable, Nameable};

class ParentCompany implements Calculable, Nameable
{
    /**
     * Parent Company's information.
     */
    private string $companyName;
    private int $companyIncome;
    public array $subsidiaries;

    public function __construct(string $companyName, int $companyIncome, array $subsidiaries)
    {
        $this->companyIncome = $companyIncome;
        $this->subsidiaries = $subsidiaries;
        $this->companyName = $companyName;
    }

    /**
     * Calculating company's income.
     */
    public function calculateIncome(): int
    {
        $income = $this->companyIncome;
        foreach ($this->subsidiaries as $subsidiary) {
            $income += $subsidiary->calculateIncome();
        }

        return $income;
    }

    /**
     * Company's name.
     */
    public function getName(): string
    {
        return $this->companyName;
    }
}
