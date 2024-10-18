<?php

namespace App\Livewire\Forms;


use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
        try{
            
            $user = new User();
            $user->email = $this->email;
            $user->password = Hash::make($this->password);
            $user->slug = generateUniqueSlug();
            $user->role = $this->role;
            $user->company_name = $this->company_name;
            $user->save();

            // Log in the user
            Auth::login($user);
    
            $this->reset();

            return true;
        }catch(\Exception $e){
            return false;
        }

    }

}
