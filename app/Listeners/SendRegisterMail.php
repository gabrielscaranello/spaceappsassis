<?php

namespace App\Listeners;

use App\Events\RegisterMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\PreRegiterMail;
use Illuminate\Support\Facades\Mail;

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
      Mail::to($event->preregister->email)->send(new PreRegiterMail($event->preregister));
    }
}
