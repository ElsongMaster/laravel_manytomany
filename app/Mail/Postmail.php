<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Postmail extends Mailable
{
    use Queueable, SerializesModels;
    public $dataPost;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataPost)
    {
        $this->dataPost = $dataPost;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('postmail');
    }
}
