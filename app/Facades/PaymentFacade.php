<?php

namespace App\Facades;

use App\PaymentService\PaymentInterface;
use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PaymentInterface::class;
    }
}
