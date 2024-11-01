<?php

namespace App\Livewire\Forms;

use App\Models\Testimonial;
use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class TestimonialForm extends Form
{
    public $client_image;
    public $client_name;
    public $client_rating;
    public $client_review;


    //Validation rules for creating testimonial 
    protected function  rules() {

     return [
            'client_image' => ['required', 'image', 'mimes:jpg,jpeg,gif,png', 'max:1024'],
            'client_name' => ['required', 'string', 'min:2'],
            'client_rating' => ['required', 'integer', 'max:5'],
            'client_review' => ['required', 'string', 'min:30']
        ];
    } 


    //validation messages for creating testimonial
    protected function  messages() {
       
       return [
            'client_image.required' => 'Please upload client image',
            'client_image.image' => "Please upload an image",
            'client_image.mimes' => "Unsupported file. Supported image types: jpg,jpeg,png,and gif",
            'client_image.max' => "Image file is too large. Image size should not be more than 1MB",
            'client_name.required' => "Please provide client name",
            'client_name.min' => "Client name should not be less 2 character long",
            'client_rating.required' => "Please provide cient rating",
            'client_rating.max' => "Client rating should not be greater than 5",
            'client_review.required' => "Client review is required",
            'client_review.min' => "Client review should not be less than 30 character long"
        ];

    }   


    public function store()
    {
        //Current user
        $user = User::findOrFail(Auth::guard('web')->user()->id);
        
        //Validating input fields
        $this->validate($this->rules(), $this->messages());
        
        try{

             // Store the new image and retrieve only its name
             $client_image_path = $this->client_image->store('public/uploads');
             $client_image = basename($client_image_path);

             //Save testimonial to the database
             $testimonial = new Testimonial();
             $testimonial->user_id = $user->id;
             $testimonial->client_image = $client_image;
             $testimonial->client_name = $this->client_name;
             $testimonial->client_rating = $this->client_rating;
             $testimonial->client_review = $this->client_review;
             $testimonial->save();
            
             return true;

        }catch(\Exception $e){
             // Log the error message (optional)
             Log::error('create testimonial failed: ' . $e->getMessage());
             // Return false if an exception occurs
             return false;
        }
    }

}
