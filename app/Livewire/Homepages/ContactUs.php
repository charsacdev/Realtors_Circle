<?php

namespace App\Livewire\Homepages;

use Livewire\Component;
use App\Livewire\Forms\ContactMessageForm;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{
    public ContactMessageForm $form;




    public function saveContact()
    {

       if($this->form->store())
       {
            $this->dispatch('success', ['message' => 'Your message has been received, our team will reach out to you shortly.']);
            
            //Sending new contact message
            Mail::to($this->form->email)->send(new ContactMessage($this->form->fullname, config('app.name')));
            
            $this->form->reset();

       }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
       }
    }

    public function render()
    {
        return view('livewire.homepages.contact-us');
    }
}
