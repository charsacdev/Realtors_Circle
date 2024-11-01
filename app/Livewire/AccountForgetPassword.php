<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AccountForgetPassword extends Component
{
    public $email;
    public $successMessage;
    public $errorMessage;

    public $rules = [
        'email' => ['required', 'email'],
    ];

    public function sendMail()
    {
        $this->validate();

        $token = uniqid();

        $user = User::where('email', $this->email)->first();

        if($user)
        {
            $user->token = $token;
            $user->token_created_at = now();
            $user->save();
            $url = route('new-password', $token);

            try{

                Mail::to($user->email)->send(new ResetPasswordEmail($user->first_name, $user->last_name, $url));
                
                $this->errorMessage = false;
                $this->successMessage = "A password reset link has been sent to your email address.";
                $this->reset('email');

            }catch(\Exception $e){
                Log::error('Password link not sent ' . $e->getMessage());
                $this->successMessage = false;
                $this->errorMessage = "Something went wrong, please try again";
            }
        }

        $this->errorMessage = false;
        $this->successMessage = "A password reset link has been sent to your email address.";
        $this->reset('email');
    }


    public function render()
    {
        return view('livewire.account-forget-password');
    }
}
