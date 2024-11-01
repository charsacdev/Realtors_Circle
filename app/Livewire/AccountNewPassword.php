<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AccountNewPassword extends Component
{
    public $password;
    public $password_confirmation;
    public $user;
    public $is_expired = false;



    public $rules = [
        'password' => ['required', 'confirmed', 'min:8'],
    ];



    public function mount($token)
    {

       $this->user = User::where('token', $token)->first();

        // Check if the user exists and the token is valid
        if (!$this->user || !$this->isTokenValid($this->user)) {

           $this->is_expired = 'This password reset link is invalid or has expired.';

        }
       
    }


    protected function isTokenValid($user)
    {
        // Check if the token was created within the last 30 minutes
        return $user->token_created_at >= Carbon::now()->subMinutes(30);
    }

    public function savePassword()
    {
        $this->validate();

        
        try{


            $user = User::whereNotNull(['token', 'token_created_at'])
                            ->where('id', @$this->user->id)
                            ->first();

            if(!$user){
                $this->dispatch('failure', ['message' => 'Please proceed to login']);
                return;
            }

            $user->password = Hash::make($this->password);
            $user->token = null;
            $user->token_created_at = null;
            $user->save();

            $this->reset();
     

            $this->dispatch('success', ['message' => 'Password reset was successful!. Proceed to login.']);

        }catch(\Exception $e){
            Log::error('Password reset failed ' . $e->getMessage());
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }


    public function render()
    {
        return view('livewire.account-new-password');
    }
}
