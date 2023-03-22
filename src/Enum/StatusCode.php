<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

enum StatusCode: string
{
    use Helper;

    case new = 'new';
    case received = 'received';
    case printed = 'printed';
    case confirmed = 'confirmed';
    case confirmed_change_delivery_time = 'confirmed_change_delivery_time';
    case error = 'error';
    case kitchen = 'kitchen';
    case in_delivery = 'in_delivery';
    case delivered = 'delivered';
}
