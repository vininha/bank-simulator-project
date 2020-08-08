<?php


namespace Vinicius\Bank\Service;

use Vinicius\Bank\Model\Validate;

class authenticator
{
    public function tryLogin(Validate $validate, string $password):void
    {
        if ($validate->canValidate($password)){
            echo "Ok. User logged.".PHP_EOL;
        } else{
            echo "Ops. Wrong password." .PHP_EOL;
        }
    }
}