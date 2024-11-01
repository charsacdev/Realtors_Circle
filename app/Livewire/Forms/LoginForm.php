<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    public $email;
    public $password;
    public $errorMessage;

    protected $rules = [
        'email' => ['required'],
        'password' => ['required']
    ];

    protected $messages = [
        'email.required' => 'Please provide your email address',
        'password.required' => 'Please provide your password'
    ];

    public function authenticateUser()
    {

       $this->validate();


        // Attempt to log the user in
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) 
        {
            if(Auth::user()->email_verified_at){
                // Regenerate session on successful login
                session()->regenerate();
                return true;

            }

            Auth::logout();
            session()->invalidate();          
            session()->regenerateToken(); 

            return 'unverified';
            
                
        }elseif(!Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
            return false;
        }

        return 'error';
    }
}
