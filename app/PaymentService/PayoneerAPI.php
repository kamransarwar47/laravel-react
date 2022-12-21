<?php

namespace App\PaymentService;

class PayoneerAPI implements PaymentInterface
{
    public function checkout()
    {
        return 'Checkout with Payoneer';
    }
}
