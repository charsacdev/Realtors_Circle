<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Testimonial;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class UpdateTestimonialForm extends Form
{
    public $testimonial;
    public $client_image;
    public $client_name;
    public $client_rating;
    public $client_review;
    public $existing_client_image;



    //Validation rules for creating new testimonial 
    protected function  rules() {

        return [
                'client_image' => ['nullable', 'image', 'mimes:jpg,jpeg,gif,png', 'max:1024'],
                'client_name' => ['required', 'string', 'min:2'],
                'client_rating' => ['required', 'integer', 'max:5'],
                'client_review' => ['required', 'string', 'min:30']
            ];
        } 
    
        protected function  messages() {
            
            return [
                'client_image.required' => 'Please upload client image',
                'client_image.image' => "Please upload an image",
                'client_image.mimes' => "Unsupported file. Supported image types: jpg,jpeg,png,and gif",
                'cllient_image.max' => "Image file is too large. Image size should not be more than 1MB",
                'client_name.required' => "Please provide client name",
                'client_name.min' => "Client name should not be less 2 character long",
                'client_rating.required' => "Please provide cient rating",
                'client_rating.max' => "Client rating should not be greater than 5",
                'client_review.required' => "Client review is required",
                'client_review.min' => "Client review should not be less than 30 character long"
            ];
    
        }   


    
    public function loadTestimonialData()
    {
        $this->existing_client_image = $this->testimonial->client_image;
        $this->client_name = $this->testimonial->client_name;
        $this->client_rating = $this->testimonial->client_rating;
        $this->client_review = $this->testimonial->client_review;

        // Check if the authenticated user can view this testimonial
        if (!auth()->user() || !Gate::allows('view', $this->testimonial)) {
            abort(403, 'Unauthorized action.');
        }
    }


    public function update()
    {
        // Check if the authenticated user can update this testimonial
        if (!auth()->user() || !Gate::allows('update', $this->testimonial)) {
            abort(403, 'Unauthorized action.');
        }
        
        $this->validate($this->rules(), $this->messages());

        try{

            //Check if user selected a new image
            if($this->client_image){

                // Check if there is an existing image and delete it
                if ($this->existing_client_image && Storage::exists('public/uploads/' . $this->existing_client_image)) {
                    Storage::delete('public/uploads/' . $this->existing_client_image);
                }

                // Store the new image and retrieve only its name
                $new_client_image_path = $this->client_image->store('public/uploads');
                $new_client_image = basename($new_client_image_path);

            }else{

                //set new image to old image if no new image is selected
               $new_client_image = $this->existing_client_image;
            }

            $testimonial = Testimonial::findOrFail($this->testimonial->id);
            $testimonial->client_image = $new_client_image;
            $testimonial->client_name = $this->client_name;
            $testimonial->client_rating = $this->client_rating;
            $testimonial->client_review = $this->client_review;
            $testimonial->save();

            return true;

        }catch(\Exception $e){

            // Log the error message (optional)
            Log::error('Testimonial update failed: ' . $e->getMessage());
            // Return false if an exception occurs
            return false;
        }
    }
}
