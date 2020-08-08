<?php

namespace Vinicius\Bank\Model\BankAccount;


use InvalidArgumentException;

abstract class BankAccount
{
    protected float $balance = 0;
    private static int $numberOfAccounts = 0;

    public function __construct($holder)
    {

        echo "Creating a new account.\n Name: {$holder->getName()}." . PHP_EOL;

        self::$numberOfAccounts++;
    }

    public function __destruct()
    {
        self::$numberOfAccounts--;
    }


    public static function getNumberOfAccounts(): int
    {
        return self::$numberOfAccounts;
    }

    public function withdraw(float $withdrawAmount): void
    {
        $withdrawTariff = $withdrawAmount * $this->tariffPercentage();
        $withdrawTotal = $withdrawAmount + $withdrawTariff;
        if ($withdrawTotal > $this->balance) {
            throw new NotEnoughBalanceException($withdrawTotal, $this->balance);
        }
        $this->balance -= $withdrawTotal;
        echo "Withdraw amount: {$withdrawTotal}." . PHP_EOL;
    }

    public function deposit(float $depositAmount): void
    {
        if ($depositAmount < 0) {

            throw new InvalidArgumentException();
        } else {
            $this->balance += $depositAmount;
            echo "Depositing {$depositAmount}." . PHP_EOL;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }

    abstract protected function tariffPercentage(): float;
}

