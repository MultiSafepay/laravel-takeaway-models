<?php

declare(strict_types=1);

namespace TakeawayModels;

use CastModels\Model;

class Sidedish extends Model
{
    public string $id;
    public string $name;
    public int $count;
    public float $price;
}
