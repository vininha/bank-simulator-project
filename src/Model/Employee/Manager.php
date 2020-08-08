<?php


namespace Vinicius\Bank\Model\Employee;


use Vinicius\Bank\Model\Validate;

class Manager extends Employee implements Validate
{
    public function calculateBonus():float
    {
        return $this->getSalary() * 2;
    }

    public function canValidate(string $password):bool
    {
        return $password==='4321';
    }

}