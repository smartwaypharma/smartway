<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class SendSmartNote extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
        $this->post = Post::whereId($request['post_id'])->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject('SmartNotes PDF')
            ->view('mail.smartnote')
            ->attach(Storage::path('public/' . $this->post->pdf),
                ['as' => $this->post->title .'- SmartNote.pdf', 'mime' => 'application/pdf']);

        return $mail;
    }
}
