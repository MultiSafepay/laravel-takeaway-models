<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

enum PaymentMethod: string
{
    use Helper;

    case cash = 'cash';
    case online = 'online';
    case creditcard_at_doorstep = 'creditcard_at_doorstep';
    case pin_at_doorstep = 'pin_at_doorstep';
    case bancontact = 'bancontact';
    case meal_voucher = 'meal_voucher';
    case cheque = 'cheque';
    case other = 'other';
}
