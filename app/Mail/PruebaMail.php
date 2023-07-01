<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PruebaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $maildata;
    public $attachment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($maildata,$attachment)
    {
        //
     $this -> maildata = $maildata;
     $this -> attachment = $attachment;
    } 
 
    public function build(){
        return $this ->subject('Mail from AppLaravel.com')
        ->view('mails.prueba');
    }



    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Prueba Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.prueba',
           
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
     public function attachments()
    {
        return [$attachment];
    } 
}
