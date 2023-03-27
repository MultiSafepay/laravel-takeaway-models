<?php

declare(strict_types=1);

namespace TakeawayModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Product extends Model
{
    public string $id;
    public string $name;
    public string $category;
    public int $count;
    public float $price;
    public string $remark;
    public string $city;
    /** \TakeawayModels\Order\Sidedish */
    public Collection $sideDishes;
}
