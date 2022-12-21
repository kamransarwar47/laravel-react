<?php

namespace App\Providers;

use App\Macro\RequestMacro;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Request::mixin(new RequestMacro());

        Str::macro('checkLength', function ($str, $length) {
            return static::length($str) === $length;
        });
    }
}
