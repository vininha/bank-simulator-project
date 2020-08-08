<?php


namespace Vinicius\Bank\Service;


use Vinicius\Bank\Model\Employee\Employee;

class BonusController
{
    private float $totalBonus = 0;

    public function addBonusFor(Employee $employee)
    {
        $this->totalBonus += $employee->calculateBonus();

    }

    public function getTotalBonus()
    {
        return $this->totalBonus;
    }

}