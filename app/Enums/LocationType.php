<?php

namespace App\Enums;

enum LocationType: int
{
    case REMOTE = 1;
    case HYBRID = 2;
    case OFFICE = 3;

    public static function randomValue(): string
        {
            $arr = array_column(self::cases(), 'value');

            return $arr[array_rand($arr)];
        }
}