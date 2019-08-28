<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PreRegiterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $preregister;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($preregister)
    {
        $this->preregister = $preregister;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), compact('preregister'))
        ->subject('Pré-inscrições Space Apps Assis Chateaubriand')->view('mail.pre-register');
    }
}
