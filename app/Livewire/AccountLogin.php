<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;

class AccountLogin extends Component
{
    public LoginForm $form;
    public $errorMessage;
    public $redirectUrl;

    public function mount()
    {
        $this->redirectUrl = request()->query('redirectUrl');
    }

    public function login()
    {


        $this->errorMessage = $this->form->errorMessage;
        if($this->form->authenticateUser() === true)
        {
           
            
            $this->dispatch('success', [
                'message' => 'Login successful. Redirecting to dashboard...',
                'type' => Auth::guard('web')->user()->role,
            ]);
            
            if($this->redirectUrl){
                return redirect($this->redirectUrl);
            }

        }elseif($this->form->authenticateUser() === false)
        {
            $this->errorMessage = "Invalid email address or password";

        }elseif($this->form->authenticateUser() === 'error')
        {
            $this->dispatch('failure', [
                'message' => "Something went wrong, please try again.",
            ]);

        }elseif($this->form->authenticateUser() === 'unverified'){

            $user = User::where('email', $this->form->email)->first();

            return redirect()->route('email.verification', ['vn_id' => $user->slug]);
        }
    }
    
    public function render()
    {
        return view('livewire.account-login');
    }
}
