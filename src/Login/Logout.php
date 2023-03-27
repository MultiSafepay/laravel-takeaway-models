<?php

declare(strict_types=1);

namespace TakeawayModels\Login;

use CastModels\Model;

class Logout extends Model
{
    public string $apiKey;
    public string $restaurant;
}
