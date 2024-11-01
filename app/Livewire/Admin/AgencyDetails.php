<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AgencyDetails extends Component
{
    public $agency;
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
        $this->agency = User::where(['role' => 'agency', 'slug' => $slug])->first();
    }


    public function sendMail()
    {
        adminSendMail($this, $this->content, $this->agency->email, $this->agency->company_name, $this->subject);
    }
    
    
    public function render()
    {
        return view('livewire.admin.agency-details');
    }
}
