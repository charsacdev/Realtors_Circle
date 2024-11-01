<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class RealtorDetails extends Component
{
    public $realtor;
    //Content and subject of mail to be sent
    public $content;
    public $subject;

    public $rules = [
        'content' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'content.required' => 'Please provide the content of the mail',
        'subject.required' => 'Please provide the subject of the mail',
    ];

    public function mount($slug)
    {
        $this->realtor = User::where('slug', $slug)->first();
    }

    
    public function sendMail()
    {
        adminSendMail($this, $this->content, $this->realtor->email, $this->realtor->first_name . ' ' . $this->realtor->last_name, $this->subject);
    }


    public function render()
    {
        return view('livewire.admin.realtor-details');
    }
}
