<?php


namespace Vinicius\Bank\Model;


interface Validate
{
    public function canValidate(string $password):bool;

}