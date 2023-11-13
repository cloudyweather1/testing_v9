<?php

namespace App\Helpers;

class CustomHelper
{
    public static function formatPrice($price)
    {
        return number_format($price, 2, '.', '');
    }
}
