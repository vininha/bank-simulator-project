<?php

require_once 'autoloader.php';

use Vinicius\{Bank\Model\BankAccount\BankAccount,
    Bank\Model\Address};

$address = new Address('caragua', 'centro', 'minas gerais', '179');

echo "\n";
echo BankAccount::getNumberOfAccounts().PHP_EOL;

echo $address;