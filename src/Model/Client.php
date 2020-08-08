<?php

namespace Vinicius\Bank\Model;

use Vinicius\Bank\Model\Employee\PropertiesAccess;

class Client
{
    use PropertiesAccess;
    protected string $name;
    private SocialSecurityNumber $SSNumber;

    public function __construct(string $name, SocialSecurityNumber $SSNumber)
    {
        $this->validateName($name);
        $this->name = $name;
        $this->SSNumber = $SSNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    final protected function validateName(string $name){// final means it can't be overwritten
        if (strlen($name) < 3){
            echo "Too few characters.";
            exit();
        }
    }

}