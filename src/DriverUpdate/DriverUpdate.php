<?php

declare(strict_types=1);

namespace TakeawayModels\DriverUpdate;

use CastModels\Model;
use TakeawayModels\Order\OrderId;

class DriverUpdate extends Model
{
    public OrderId $order;
    public Driver $driver;
    public Schedule $Schedule;
}
