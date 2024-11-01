<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Customer;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use App\Rules\UniqueCustomerForUser;

class CustomerForm extends Form
{
    public $image;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $location;
    public $country;


    protected function rules(){
        return     [
            'image' => ['nullable', 'image', 'mimes:jpg,png,gif'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', new UniqueCustomerForUser(auth('web')->user()->id)],
            'phone_number' => ['required', new UniqueCustomerForUser(auth('web')->user()->id)],
            'location' => ['required'],
            'country' => ['required']
        ];
    } 

    protected function messages() 
    {
        return [
            'image.image' => "Please provide a valid image",
            'first_name.required' => "Please provide customer firstname",
            'last_name.required' => "Please provide customer lastname",
            'email.required' => "Please provide customer email",
            'phone_number.required' => "Please provide customer phone number",
            'location.required' => "Please provide customer location",
            'country.required' => "Please provide customer country"
        ];
    }


    public function store()
    {
        
        $this->validate($this->rules(), $this->messages());
        try{
            //Check if image is selected 
            if($this->image){
                $image_path = $this->image->store('public/uploads');
                $new_image = basename($image_path);
            }

            $customer = new Customer();
            $customer->user_id = auth('web')->user()->id;
            $customer->image = $new_image ? $new_image : null;
            $customer->first_name = $this->first_name;
            $customer->last_name = $this->last_name;
            $customer->email = $this->email;
            $customer->phone_number = $this->phone_number;
            $customer->location = $this->location;
            $customer->country = $this->country;
            $customer->save();

            return true;

        }catch(\Exception $e){
            return false;
            Log::error("Customer creation failed: " . $e->getMessage());
        }
    }

}
