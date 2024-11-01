<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ContactMessage as Message;

class ContactMessage extends Component
{
    public $messages;

    public function mount()
    {
        $user = auth('web')->user();
        $this->messages = $user->messages;
    }

    #[On('update-status')]
    public function setStatus($id)
    {
        $message = Message::findOrFail($id);
        $message->is_read = 1;
        $message->save();
    }


    public function render()
    {
        return view('livewire.agency.contact-message');
    }
}
