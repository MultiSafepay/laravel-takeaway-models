<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

enum PaymentMethod: string
{
    use Helper;

    case delivery = 'delivery';
    case pickup = 'pickup';
}
