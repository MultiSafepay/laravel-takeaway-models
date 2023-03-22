<?php

declare(strict_types=1);

namespace TakeawayModels;

use CastModels\Model;

class Discount extends Model
{
    public string $name;
    public int $count;
    public float $price;
}
