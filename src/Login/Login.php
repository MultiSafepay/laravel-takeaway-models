<?php

declare(strict_types=1);

namespace TakeawayModels\Login;

use CastModels\Model;

class Login extends Model
{
    public string $apiKey;
    public string $restaurant;
    public string $orderUrl;
    public string $driverUpdateUrl;
    public string $aliveUrl;
    public string $version;
    public string $clientKey;
    public Subscribe $subscribe;
}
