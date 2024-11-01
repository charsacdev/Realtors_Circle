<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\ContactMessage;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;

class ContactMessageForm extends Form
{
    public $fullname;
    public $email;
    public $message;
    public $user_id = 0;

    protected $rules = [
        'fullname' => ['required'],
        'email' => ['required', 'email'],
        'message' => ['required'],
    ];

    protected $messages = [
        'fullname.required' => 'Please provide your fullname',
        'email.required' => "Please provide your email address",
        'email.email' => "Please provide a valid email address",
        'message.required' => "Please provide your message"
    ];


    public function store()
    {
        $this->validate($this->rules, $this->messages);
        
        try{
            $contact = new ContactMessage();
            $contact->user_id = $this->user_id;
            $contact->fullname = $this->fullname;
            $contact->email = $this->email;
            $contact->message = $this->message;
            $contact->is_read = false;
            $contact->save();

            return true;

        }catch(\Exception $e){
            Log::error("Save contact failed: " . $e->getMessage());
            return false;
        }
    }
}
