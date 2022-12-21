<?php

namespace App\Listeners;

use App\Events\ProfileViewEvent;
use App\Jobs\SendProfileViewEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProfileViewEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProfileViewEvent $event
     * @return void
     */
    public function handle(ProfileViewEvent $event)
    {
        SendProfileViewEmail::dispatch($event->user);
    }
}
