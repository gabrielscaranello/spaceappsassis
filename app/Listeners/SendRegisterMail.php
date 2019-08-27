<?php

namespace App\Listeners;

use App\Events\RegisterMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegisterMail
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
     * @param  RegisterMail  $event
     * @return void
     */
    public function handle(RegisterMail $event)
    {
      Log::info($event->toString());
    }
}
