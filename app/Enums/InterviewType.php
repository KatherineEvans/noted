<?php

namespace App\Enums;

enum InterviewType: int
{
    case PHONE = 1;
    case VIRTUAL = 2;
    case OFFICE = 3;

    public static function randomValue(): string
        {
            $arr = array_column(self::cases(), 'value');

            return $arr[array_rand($arr)];
        }
}