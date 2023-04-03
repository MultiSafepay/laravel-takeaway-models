<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

enum OrderType: string
{
    use Helper;

    case delivery = 'delivery';
    case pickup = 'pickup';
}
