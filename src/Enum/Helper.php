<?php

declare(strict_types=1);

namespace TakeawayModels\Enum;

trait Helper
{
    /**
     *
     * @return string[]
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function in(): string
    {
        return implode(',', self::values());
    }
}
