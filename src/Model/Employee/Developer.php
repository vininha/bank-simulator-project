<?php


namespace Vinicius\Bank\Model\Employee;


class Developer extends Employee
{
    public function getSalaryIncrease()
    {
        echo "Salary before the raise: {$this->getSalary()}.".PHP_EOL;
        $this->receiveSalaryIncrease($this->getSalary()*0.75);
        echo "New salary: {$this->getSalary()}.".PHP_EOL;
    }

    public function calculateBonus():float
    {
        return 500;
    }

}