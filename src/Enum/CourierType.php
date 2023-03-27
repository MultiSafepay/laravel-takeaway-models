<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

enum CourierType: string
{
    use Helper;

    case restaurant = 'restaurant';
    case takeaway = 'takeaway';
    case external = 'external';
}
