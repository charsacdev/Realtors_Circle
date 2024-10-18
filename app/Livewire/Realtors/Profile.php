<?php

namespace App\Livewire\Realtors;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;
use App\Livewire\Forms\ProfileForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class Profile extends Component
{
    use WithFileUploads;
    
    public $user;
    public ProfileForm $form;
    public $ngstates;

    //To hold user testimonials
    public $testimonials;

    // To hold the newly uploaded image
    public $profile_image; 


    public function mount()
    {
        $this->user = Auth::guard('web')->user();
        
        //Initialize user data form profileForm method
        $this->form->loadUserData($this->user);
        
        // Load Nigerian states from config/ngstates file
        $this->ngstates = config('ngstates.states');

        //Load user testimonials
        $this->testimonials = $this->user->testimonials;
        
    }


    //Update user profile details
    public function updateProfile()
    {
        //Setting profileForm profileImage property to the newly uploaded image
        $this->form->profile_image = $this->profile_image;

       if($this->form->store())
       {
            //dispatch event
            $this->dispatch('success', ['message' => 'Profile updated successfully!.']);

       }elseif(!$this->form->store())
       {
           $this->dispatch('failure', ['message' =>'Something went wrong, please try again.']);
       }
    }


    
    // Listen for the 'deleteTestimonial' event
    protected $listeners = ['deleteTestimonial'];
    public function deleteTestimonial($testimonial_id)
    {
        $testimonial = Testimonial::findOrFail($testimonial_id);

         // Check if the authenticated user can delete this testimonial
         if (!auth()->user() || !Gate::allows('delete', $testimonial)) {
            abort(403, 'Unauthorized action.');
        }

        if($testimonial->delete())
        {
            //dispatching a deleted event
            $this->dispatch('deleted', [
                'message' => 'Testimonial deleted successfully!', 
                'id' => $testimonial_id,
                'src' => "testimonial", // Element id that needs to be removed on the frontend
            ]);

        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }

        
    }



    public function render()
    {
        return view('livewire.realtors.profile');
    }
}
