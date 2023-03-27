<?php

declare(strict_types=1);

namespace TakeawayModels\DriverUpdate;

use CastModels\Model;

class Schedule extends Model
{
    public string $pickupTime;
    public string $deliveryTime;
}
