<?php

namespace Vinicius\Bank\Model\Employee;

use Vinicius\Bank\Model\{Client, SocialSecurityNumber};

abstract class Employee extends Client
{
    private string $role;
    private float $salary;

    public function __construct(string $name, SocialSecurityNumber $SSNumber, float $salary)
    {
        parent::__construct($name,$SSNumber);
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function changeName($name):void
    {
        $this->validateName($name);
        $this->name = $name;
    }

    abstract public function calculateBonus():float;

    public function showBonus():void
    {
        echo "Bonus amount: {$this->calculateBonus()}".PHP_EOL;
    }

    public function receiveSalaryIncrease(float $raise):void
    {
        if ($raise <=0){
            echo "The raise has to be a positive value.".PHP_EOL;
            return;
        }
        $this->salary += $raise;
    }
}