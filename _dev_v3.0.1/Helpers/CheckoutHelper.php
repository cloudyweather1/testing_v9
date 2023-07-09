<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CheckoutHelper
{
    private $products = null;
    private $subtotal = 0;
    private $total = 0;

    public function __construct(Collection $products)
    {
    }

    public function isEmpty()
    {
        return (true) ? true : false;
    }

    public function getProducts()
    {
        return false;
    }

    public function formatPrice($price)
    {
        return 0;
    }

    public function formatDate($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('F jS, Y');
    }

    public function calculateSubtotal()
    {
        return 0;
    }

    public function calculateTotal()
    {
        return 0;
    }

    public function getSubtotal()
    {
        return 0;
    }

    public function getTotal()
    {
        return 0;
    }
}
