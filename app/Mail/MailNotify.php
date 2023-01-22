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

    public function __construct()
    {
        //
    }


    public function envelope()
    {
        return new Envelope(
            subject: 'Mail Notify',
        );
    }


    public function content()
    {
        return new Content(
            //
        );
    }


    public function build(){
        return $this->view('services.techniciens.send_mail');
    }


    public function attachments()
    {
        return [];
    }
}
