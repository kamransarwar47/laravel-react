<?php

namespace App\Providers;

use App\PaymentService\PaymentInterface;
use App\PaymentService\PayoneerAPI;
use App\PaymentService\PaypalAPI;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentInterface::class,PaypalAPI::class);
    }

    public function provides()
    {
        return [
            PaypalAPI::class
        ];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
