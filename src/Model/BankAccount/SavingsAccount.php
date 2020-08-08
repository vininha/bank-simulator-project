<?php


namespace Vinicius\Bank\Model\BankAccount;


class SavingsAccount extends BankAccount
{
    protected function tariffPercentage(): float
    {
        return 0.03;
    }

}