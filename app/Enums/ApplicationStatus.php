<?php

namespace App\Enums;

enum ApplicationStatus: int
{
    case APPLIED = 1;
    case INTERVIEWING = 2;
    case OFFER = 3;
    case REJECTED = 4;
    case NO_RESPONSE = 5;

    public static function randomValue(): string
        {
            $arr = array_column(self::cases(), 'value');

            return $arr[array_rand($arr)];
        }
}