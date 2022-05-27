<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ThankYouNotification extends Mailable
{
    use Queueable, SerializesModels;

   // public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject('Thank you for your interest in working with Smartway')
            ->view('mail.thankyou-notification');
        return $mail;
    }
}
