<?php

declare(strict_types=1);

namespace TakeawayModels\Order;

use CastModels\Model;

class Status extends Model
{
    public string $id;
    public string $status;
    public string $key;
    public string $changedDeliveryTime;
    public string $text;
}
