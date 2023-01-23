<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $urmessage;

    public function __construct($subject,$urmessage)
    {    $this->subject = $subject ?? "null";
        $this->urmessage = $urmessage ?? "null";

    }


    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }


    public function content()
    {
        return new Content(
            //
        );
    }


    public function build(){
        return $this->markdown('services.techniciens.mail_template');
    }


    public function attachments()
    {
        return [];
    }
}
