<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class MacAddress
{
    #[Assert\MacAddress]
    public $macAddress;
}