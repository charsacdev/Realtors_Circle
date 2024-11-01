<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\User;
use Livewire\Component;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Forms\ContactMessageForm;


class Contact extends Component
{
    public $agency;
    public $settings;
    public ContactMessageForm $form;

    public function mount()
    {
        //Capture the agency slug from the url
        $slug = request()->segment(2);
        $this->agency = User::where('slug', $slug)->first();
        $this->settings = json_decode($this->agency->settings->settings);

    }



    public function saveContact()
    {
        $this->form->user_id = $this->agency->id;
        if($this->form->store()){
            
            $this->dispatch('success', ['message' => 'Thank you for contact us, we will get back to you soon.']);
             //Sending new contact message
             Mail::to($this->form->email)->send(new ContactMessage($this->form->fullname, $this->agency->company_name));
            $this->form->reset();

        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }


    public function render()
    {
        return view('livewire.agency.homepages.contact');
    }
}
