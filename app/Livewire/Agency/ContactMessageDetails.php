<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use App\Models\ContactMessage;

class ContactMessageDetails extends Component
{
    public $message;

    //Content and subject of mail to be sent
    public $content;
    public $subject;
    public $channel;

    public $rules = [
        'content' => ['required'],
        'subject' => ['required'],
        'channel' => ['required'],
    ];

    public $messages = [
        'content.required' => 'Please provide the content of the mail',
        'subject.required' => 'Please provide the subject of the mail',
        'channel.required' => 'Please select a channel'
    ];


    public function mount($message_id)
    {
        $this->message = ContactMessage::findOrFail($message_id);
    }


    public function sendMail()
    {
        $this->validate();

        if($this->channel == 'email')
        {
            adminSendMail($this, $this->content, $this->message->email, $this->message->fullname, $this->subject, auth()->user()->company_name);
        }
    }
    
    public function render()
    {
        return view('livewire.agency.contact-message-details');
    }
}
