<?php

namespace Vinicius\Bank\Model\BankAccount;

use Vinicius\Bank\Model\Validate;
use Vinicius\Bank\Model\Client;
use Vinicius\Bank\Model\SocialSecurityNumber;
use Vinicius\Bank\Model\Address;

class AccountHolder extends Client implements Validate
{
    private Address $address;

    public function __construct(string $name, SocialSecurityNumber $SSNumber, Address $address)
    {
        parent::__construct($name,$SSNumber);
        $this->address = $address;
    }

    public function getAddress():Address
    {
        return $this->address;
    }

    public function canValidate(string $password): bool
    {
        return $password ==='abcd';
    }


}