<?php

namespace App\Helpers;

use Exception;

// use Exception;

class StripeHelper
{
    private $stripe;

    public function __construct()
    {
        try {
            // CODE GOES HERE
        } catch (\Throwable $th) {
            // throw $th
            echo 'Invalid API key';
            exit;
        }
    }

    public function getCheckoutOrder($session_id)
    {
        return true;
    }

    public function isCheckoutCompleted($checkout_session)
    {
        return true;
    }

    public function getPaymentDetails($checkout_session)
    {
        return true;
    }
}
