<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $username,$useremail,$message;

    public function __construct($username,$useremail,$message)
    {
        
        $this->username = $username;
        $this->useremail = $useremail;
        $this->message = $message;
    }


 
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'The RealtorsCircle Contact Us Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-message-admin',
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
