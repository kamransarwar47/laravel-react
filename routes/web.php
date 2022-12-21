<?php

use App\Events\ProfileViewEvent;
use App\Facades\PaymentFacade;
use App\Models\User;
use App\Notifications\ProfileViewNotification;
use App\PaymentService\PaymentInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    dd($request->username());
//    dd(Str::checkLength('Kamran', 6));
//    $user= User::inRandomOrder()->first();
//    ProfileViewEvent::dispatch($user);
//    $user->notify(new ProfileViewNotification());
//    echo $user->name;
});
