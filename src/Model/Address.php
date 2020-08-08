<?php

namespace Vinicius\Bank\Model;


use Vinicius\Bank\Model\Employee\PropertiesAccess;

/**
 * Class Address
 * @package Vinicius\Banco\Model
 * @property-read string city
 * @property-read string $district
 * @property-read string $avenue
 * @property-read string $number
 */

class Address
{

    use PropertiesAccess;
    private string $city;
    private string $district;
    private string $avenue;
    private string $number;

    public function __construct(string $city, string $district, string $avenue, string $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->avenue = $avenue;
        $this->number = $number;
    }

    public function __toString()
    {
        return "Avenue: {$this->avenue}, number: {$this->number}, district: {$this->district}, city: {$this->city}.".PHP_EOL;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getAvenue(): string
    {
        return $this->avenue;
    }

    public function getNumber(): string
    {
        return $this->number;
    }



}