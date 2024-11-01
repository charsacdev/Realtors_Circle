<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignupForm extends Form
{
    //email
    public $email = '';
    
    //password 
    public $password = '';

    //password confirmation
    public $password_confirmation = '';

    //Role
    public $role = '';

    //Company name
    public $company_name;

    // Validation rules
    protected function rules() {

       return [
    
            'email' => ['required', 'string', 'email', 'unique:users,email'], 
            'password' => ['required', 'confirmed', 'min:8'],
            'company_name' => $this->role == 'agency' ?  ['required', 'unique:users,company_name'] : ['nullable', 'unique:users,company_name'],
        ];
    }  

    

    // Custom error messages
    protected function messages() {

       return [
            'email.required' => "Please provide your email address.",
            'email.email' => "Please provide a valid email address.",
            'email.unique' => "Email associated with another account.",
            'password.required' => "Please provide a password.",
            'password.confirmed' => "The password and confirm password do not match.",
            'password.min' => 'The password must be at least 8 characters long.',
            'company_name.unique' => "Company name is taken, please choose another one",
            'company_name.required' => "please provide your company name",
        ];
    }


    public function store()
    {
        
        $this->validate($this->rules(), $this->messages());
        $verification_token = uniqid('', true);
        
        try{
            
            $user = new User();
            $user->email = $this->email;
            $user->password = Hash::make($this->password);
            $user->slug = generateUniqueSlug();
            $user->role = $this->role;
            $user->company_name = $this->company_name;
            $user->verification_token = $verification_token;
            $user->save();

            $vn_url = route('email.verification', [ 'vn_id' => $user->slug]);
            $vs_url = route('email.verification', ['vs_id' => $verification_token ]);

            try{

                Mail::to($user->email)->send(new EmailVerificationMail($vs_url));

            }catch(\Exception $e){
                Log::error('Failed to send email verification link: ' . $e->getMessage());
            }

            $this->reset();
            return redirect($vn_url);
    

        }catch(\Exception $e){
            return false;
        }

    }

}
