<?php

namespace App\Livewire;

use App\Livewire\Forms\SignupForm;
use Livewire\Component;

class AgencyRegistration extends Component
{
    public SignupForm $form;
    public $role = 'agency';

    public function register()
    {
        //Setting the user role
        $this->form->role = $this->role;
        
        if($this->form->store())
        {
            $this->dispatch('success', [
                'message' => 'Registration successfully. Redirecting to your dashboard...',
                'type' => $this->role,
            ]);
        }else{
            $this->dispatch('failure', [
                'message' => 'Something went wrong, please try again',
            ]);
        } 
    }
    public function render()
    {
        return view('livewire.agency-registration');
    }
}
