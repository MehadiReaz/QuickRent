<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Websitemail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject, $body;
    public function __construct($subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }
    public function build()
    {
        return $this->view('email.email')->with(['subject' => $this->subject,
        ]);
    }
}
