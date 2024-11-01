<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Mail\BroadcastMessageAdmin;
use Illuminate\Support\Facades\Mail;

class BroadcastMessage extends Component
{
    public $chanell;
    public $content;
    public $subject;

    public $rules = [
        'channel' => ['required'],
        'content' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'channel.required' => 'Please select recipients.',
        'content.required' => "Please enter mail content.",
        'subject.required' => "Please enter mail subject",
    ];


    public function sendMail()
    {
        if($this->channel == 'realtor'){
            $users = User::where('role', 'realtor')->get();
                
        }elseif($this->channel == 'agency'){
            $users = User::where('role', 'agency')->get();
        }else{
            $users = User::whereNot('role', 'admin')->get();
        }
        
        adminsendBroadcastMail($this, $this->content, $this->subject, $users);

    }


    public function render()
    {
        return view('livewire.admin.broadcast-message');
    }
}
