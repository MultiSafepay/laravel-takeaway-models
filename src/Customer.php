<?php

declare(strict_types=1);

namespace TakeawayModels;

use CastModels\Model;

class Customer extends Model
{
    public string $name;
    public string $companyName;
    public string $phoneNumber;
    public string $street;
    public string $streetNumber;
    public string $postalCode;
    public string $city;
    public string $extraAddressInfo;
}
