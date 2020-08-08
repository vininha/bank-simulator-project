<?php

require_once 'autoloader.php';

use Vinicius\Bank\{Model\Employee\Supervisor,
    Model\SocialSecurityNumber,
    Model\Employee\Manager,
    Model\BankAccount\AccountHolder,
    Model\Address};


$supervisor = new Supervisor('Zeca', new SocialSecurityNumber('321.423.543-65'), 7000);
$manager = new Manager('Josias', new SocialSecurityNumber('876.098.134-21'), 7000);
$holder = new AccountHolder('Zeca', new SocialSecurityNumber('987.876.640-43'), new Address('a', 'b', 'v', '1'));

$supervisor->canValidate('4321');
$manager->canValidate('1234');
$holder->canValidate('ABCD');
