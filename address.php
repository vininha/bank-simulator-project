<?php

require_once 'autoloader.php';
use Vinicius\Bank\Model\Address;

$address = new Address('Sao Paulo','Pompeia','Alguma Avenida','215');

echo $address->city.PHP_EOL;
echo $address->avenue.PHP_EOL;
echo $address->number.PHP_EOL;
echo $address->district.PHP_EOL;


