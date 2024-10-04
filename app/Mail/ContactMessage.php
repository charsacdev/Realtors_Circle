<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $username;

    public function __construct($username)
    {
        
        $this->username=$username;
    }


 
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'The RealtorsCircle Contact Us Notification',
        );
    }


    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-message',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
