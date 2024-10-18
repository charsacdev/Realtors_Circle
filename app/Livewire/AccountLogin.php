<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountLogin extends Component
{
    public LoginForm $form;
    public $errorMessage;

    public function login()
    {
        $this->errorMessage = $this->form->errorMessage;
        if($this->form->authenticateUser() === true)
        {
            $this->dispatch('success', [
                'message' => 'Login successful. Redirecting to dashboard...',
                'type' => Auth::guard('web')->user()->role,
            ]);

        }elseif($this->form->authenticateUser() === false)
        {
            $this->errorMessage = "Invalid email address or password";

        }elseif($this->form->authenticateUser() === 'error')
        {
            $this->dispatch('failure', [
                'message' => "Something went wrong, please try again.",
            ]);
        }
    }
    
    public function render()
    {
        return view('livewire.account-login');
    }
}
