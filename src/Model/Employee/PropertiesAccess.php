<?php


namespace Vinicius\Bank\Model\Employee;


trait PropertiesAccess
{
    public function __get($attributeName)
    {
        $method = 'get' .ucfirst($attributeName);
        return $this->$method();
    }
}