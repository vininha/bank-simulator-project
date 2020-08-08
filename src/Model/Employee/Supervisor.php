<?php


namespace Vinicius\Bank\Model\Employee;


use Vinicius\Bank\Model\Validate;

class Supervisor extends Employee implements Validate
{
    public function calculateBonus():float
    {
        return $this->getSalary();
    }

    public function canValidate(string $password):bool
    {
        return $password === '1234';
    }


}