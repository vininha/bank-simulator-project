<?php

namespace Vinicius\Bank\Model;

class SocialSecurityNumber
{
    private string $ssNumber;

    public function __construct(string $ssNumber)
    {
        $ssNumber = filter_var($ssNumber, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($ssNumber === false) {
            echo "Invalid number." . PHP_EOL;
            exit();
        }
        $this->ssNumber = $ssNumber;
    }

    public function getSsNumber()
    {
        return $this->ssNumber;
    }

}