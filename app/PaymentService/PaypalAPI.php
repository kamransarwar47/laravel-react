<?php

namespace App\PaymentService;

class PaypalAPI implements PaymentInterface
{
    public function checkout()
    {
        return 'Checkout with Paypal';
    }
}
