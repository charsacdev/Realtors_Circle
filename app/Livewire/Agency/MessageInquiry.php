<?php

namespace App\Livewire\Agency;

use App\Models\Schedule;
use Livewire\Component;

class MessageInquiry extends Component
{
    public $inquiry;
    public $content;
    public $channel;
    public $subject;

    public $rules = [
        'content' => ['required'],
        'channel' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'content.required' => 'Please provide the content of your message', 
        'channel.required' => 'Please select the channel of your message', 
        'subject.required' => 'Please provide the subject of your message',
    ];

    public function mount($inquiry_id)
    {
        $this->inquiry = Schedule::findOrFail($inquiry_id);
        
        if($this->inquiry->user_id != auth('web')->user()->id)
        {
            abort(403);
        }
    }

    public function sendMail()
    {
        $this->validate();

        
        if($this->channel == 'email')
        {
            adminSendMail($this, $this->content, $this->inquiry->email, $this->inquiry->first_name . ' ' . $this->inquiry->last_name, $this->subject);
            $this->reset('channel');
        }
    }

    public function render()
    {
        return view('livewire.agency.message-inquiry');
    }
}
