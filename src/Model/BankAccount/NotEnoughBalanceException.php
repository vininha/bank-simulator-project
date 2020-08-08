<?php


namespace Vinicius\Bank\Model\BankAccount;


use DomainException;

class NotEnoughBalanceException extends DomainException
{

    public function __construct(float $withdrawAmount, float $balance)
    {
        $message = "You have tried to withdraw $withdrawAmount, but your balance is only $balance.";
        parent::__construct($message);
    }
}