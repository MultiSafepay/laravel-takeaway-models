<?php

declare(strict_types=1);

namespace TakeawayModels\Order;

use CastModels\Model;

class Discount extends Model
{
    public string $name;
    public int $count;
    public float $price;
}
