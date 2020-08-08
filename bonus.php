<?php

require_once 'autoloader.php';

use Vinicius\Bank\Service\BonusController;
use Vinicius\Bank\Model\SocialSecurityNumber;
use Vinicius\Bank\Model\Employee\{Supervisor, Manager, Developer};

$developer = new Developer(
    'Tom',
    new SocialSecurityNumber('321.453.645-87'),
    1000);

$supervisor = new Supervisor(
    'Sandra',
    new SocialSecurityNumber('786.864.463-54'),
    3000);
$manager = new Manager(
    'John',
    new SocialSecurityNumber('675.877.987-54'),
    5000);
$developer->showBonus();
$developer->getSalaryIncrease();
$supervisor->showBonus();
$manager->showBonus();

$controller = new BonusController();
$controller->addBonusFor($developer);
$controller->addBonusFor($supervisor);
