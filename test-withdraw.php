<?php

use Vinicius\Bank\Model\BankAccount\{NotEnoughBalanceException, SavingsAccount, AccountHolder};
use Vinicius\Bank\Model\{SocialSecurityNumber, Address};

require_once 'autoloader.php';

$account = new SavingsAccount(
    new AccountHolder('Jack',
        new SocialSecurityNumber('123.123.123-12'),
        new Address('Sao Paulo', 'Pinheiros', 'Rua 2', '123'))
);

echo $account->getBalance() . PHP_EOL;
$account->deposit(500);
echo $account->getBalance() . PHP_EOL;

//testing the exception...
try {

    $account->withdraw(600);
} catch (NotEnoughBalanceException $ex) {
    echo $ex->getMessage();
}
echo $account->getBalance() . PHP_EOL;
