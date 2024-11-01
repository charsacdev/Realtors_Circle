<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileForm extends Form
{
    public $email;
    public $profile_image;
    public $bio;
    public $first_name;
    public $last_name;
    public $company_name;
    public $phone_number;
    public $username;
    public $city;
    public $state;
    public $facebook_link;
    public $instagram_link;
    public $whatsapp_link;
    public $existing_profile_image;

    public function rules($user) 
     {
        return [
            'email' => ['nullable', 'email',  Rule::unique('users')->ignore($user->id),],
            'profile_image' => ['max:1024', 'nullable','image', 'mimes:jpeg,png,jpg,gif'],
            'bio' => ['nullable', 'string', 'min:30'],
            'first_name' => ['nullable', 'string'],
            'last_name' => ['nullable', 'string'],
            'company_name' => ['nullable', 'string'],
            'phone_number' => ['nullable', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('users')->ignore($user->id)],
            'username' => ['nullable', 'string', Rule::unique('users')->ignore($user->id),], 
            'city' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'facebook_link' => ['nullable', 'url'],
            'instagram_link' => ['nullable', 'url'],
            'whatsapp_link' => ['nullable', 'url']
        ];
    }

    public function messages()
    {
        return [
            'email.email' => "Please provide a valid email address",
            'email.unique' => "This email address is already taken",
            'profile_image.max' => "Image file should not be more than 1MB",
            'profile_image.image' => "Image suppported formats: jpeg, png, jpg, gif",
            'bio.min' => 'Bio character length should be 30 at least',
            'username.unique' => "This username is already taken",
            'company_name.unique' => "This company name is already taken",
            'phone_number.unique' => "This phone number is already taken",
            'phone_number.regex' => "Please provide a valid phone number",
            'facebook_link.url' => "Please provide a valid url",
            'instagram_link.url' => "Please provide a valid url",
            'whatsapp_link.url' => "Please provide a valid url",
        ];


    } 


    public function loadUserData($user)
    {
        // Initialize the form fields with the current user data
        $this->email = $user->email;         
        $this->bio = $user->bio;           
        $this->first_name = $user->first_name;          
        $this->last_name = $user->last_name;         
        $this->company_name = $user->company_name;        
        $this->phone_number = $user->phone_number;       
        $this->username = $user->username;      
        $this->city = $user->city;     
        $this->state = $user->state;    
        $this->facebook_link = $user->facebook_link;   
        $this->instagram_link = $user->instagram_link;  
        $this->whatsapp_link = $user->whatsapp_link; 
        $this->existing_profile_image = $user->profile_image;
    }


    public function store()
    {
        //Current user
        $user = User::findOrFail(Auth::guard('web')->user()->id);

        //Validating input fields
        $this->validate($this->rules($user), $this->messages());
        
        try {

            //Check if user selected a new image
            if($this->profile_image){

                // Check if there is an existing image and delete it
                if ($this->existing_profile_image && Storage::exists('public/uploads/' . $this->existing_profile_image)) {
                    Storage::delete('public/uploads/' . $this->existing_profile_image);
                }

                // Store the new image and retrieve only its name
                $new_profile_image_path = $this->profile_image->store('public/uploads');
                $new_profile_image = basename($new_profile_image_path);

            }else{

                //set new image to old image if no new image is selected
               $new_profile_image = $user->profile_image;
            }

            //Updating user records
            $user->email = $this->email;
            $user->profile_image = $new_profile_image;            
            $user->bio = $this->bio;           
            $user->first_name = $this->first_name;          
            $user->last_name = $this->last_name;         
            $user->company_name = $this->company_name;        
            $user->phone_number = $this->phone_number;       
            $user->username = $this->username;      
            $user->city = $this->city;     
            $user->state = $this->state;    
            $user->facebook_link = $this->facebook_link;   
            $user->instagram_link = $this->instagram_link;  
            $user->whatsapp_link = $this->whatsapp_link;
            $user->save();
    
            //return true is the user is updated
            return true;

        } catch (\Exception $e) {
             // Log the error message (optional)
             Log::error('Profile update failed: ' . $e->getMessage());
            //  dd($e->getMessage());
             // Return false if an exception occurs
             return false;
        }
      

    }
}