<?php

use Vinicius\Bank\Model\BankAccount\CurrentAccount;
use Vinicius\Bank\Model\BankAccount\AccountHolder;
use Vinicius\Bank\Model\SocialSecurityNumber;
use Vinicius\Bank\Model\Address;


require_once 'autoloader.php';


$currentAccount = new CurrentAccount(
    new AccountHolder('Vinicius',
        new SocialSecurityNumber('123.123.123-65'),
        new Address('a', 'b', 'c', '4')
    )
);
//must throw an exception if the deposit is negative!
try {

    $currentAccount->deposit(-100);
}catch (InvalidArgumentException $exception){
    echo "Please deposit a positive amount." .PHP_EOL;
}