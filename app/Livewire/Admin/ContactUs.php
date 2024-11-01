<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ContactMessage;

class ContactUs extends Component
{
    public $messages;

    public function mount()
    {
        $this->messages = ContactMessage::where('user_id', 0)->get();
    }

    #[On('update-status')]
    public function setStatus($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->is_read = 1;
        $message->save();
    }


    public function render()
    {
        return view('livewire.admin.contact-us');
    }
}
