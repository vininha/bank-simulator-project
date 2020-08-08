<?php


namespace Vinicius\Bank\Model\BankAccount;


class CurrentAccount extends BankAccount
{
    protected function tariffPercentage(): float
    {
        return 0.05;
    }

    public function transfer(float $tranferAmount, BankAccount $targetAccount): void
    {

        if ($tranferAmount > $this->balance) {
            echo "Not enough balance." . PHP_EOL;
            return;
        }
        $this->withdraw($tranferAmount);
        $targetAccount->deposit($tranferAmount);

        echo "Amount transferred: {$tranferAmount}. Balance: {$this->getBalance()}." . PHP_EOL;
    }
}