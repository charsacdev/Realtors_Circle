<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Livewire\Forms\ProfileForm;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    
    public $user;
    public ProfileForm $form;
    // To hold the newly uploaded image
    public $profile_image; 


    public function mount()
    {
        $this->user = auth('web')->user();
        $this->form->loadUserData($this->user);
    }

    public function updateProfile()
    {
        //Setting profileForm profileImage property to the newly uploaded image
        $this->form->profile_image = $this->profile_image;

       if($this->form->store())
       {
            //dispatch event
            $this->dispatch('success', ['message' => 'Profile updated successfully!.']);

       }elseif(!$this->form->store())
       {
           $this->dispatch('failure', ['message' =>'Something went wrong, please try again.']);
       }
    }


    public function render()
    {
        return view('livewire.admin.profile');
    }
}
