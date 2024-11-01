<?php

namespace App\Livewire\Realtors;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class BroadcastMessage extends Component
{
    public $channel;
    public $content;
    public $subject;

    public $rules = [
        'channel' => ['required'],
        'content' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'channel.required' => 'Please select recipients.',
        'content.required' => "Please enter message content.",
        'subject.required' => "Please enter message subject",
    ];

    
    public function sendMail()
    {
        $users = Auth::guard('web')->user()->customers;


        $this->validate();

        if($this->channel == 'email'){
            adminsendBroadcastMail($this, $this->content, $this->subject, $users);
        }
    }




    public function render()
    {
        return view('livewire.realtors.broadcast-message');
    }
}
