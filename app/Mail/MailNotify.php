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
    public $email;
    public $message;

    public function __construct($subject,$message)
    {
        $this->subject->$subject;
        // $this->email->$email;
        $this->message->$message;
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
        return $this->view('services.techniciens.mail_template');
    }


    public function attachments()
    {
        return [];
    }
}
