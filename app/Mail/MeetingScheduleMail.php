<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MeetingScheduleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $google_meet_url, $subject, $content, $agency, $replymail;

    /**
     * Create a new message instance.
     */
    public function __construct($google_meet_url, $subject, $content, $agency, $replymail)
    {
        
        $this->google_meet_url = $google_meet_url;
        $this->subject = $subject;
        $this->content = $content;
        $this->agency = $agency;
        $this->replymail = $replymail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
            replyTo: $this->replymail,

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.meeting-schedule-mail',
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
