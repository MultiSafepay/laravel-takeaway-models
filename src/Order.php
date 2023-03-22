<?php

declare(strict_types=1);

namespace TakeawayModels;

use CastModels\Model;
use Illuminate\Support\Collection;

class Order extends Model
{
    public string $id;
    public string $restaurantId;
    public string $orderKey;
    public string $publicReference;
    public string $platform;
    public string $orderDate;
    public string $orderType;
    public string $requestedDeliveryTime;
    public string $requestedPickupTime;
    public string $courier;
    public float $deliveryCosts;
    public float $totalPrice;
    public float $totalDiscount;
    public bool $isPaid;
    public string $paymentMethod;
    public float $paysWith;
    public Customer $customer;
    /** \TakeawayModels\Product */
    public Collection $products;
    /** \TakeawayModels\Discount */
    public Collection $discounts;
    public string $remark;
    public string $version;
    public string $clientKey;
}
