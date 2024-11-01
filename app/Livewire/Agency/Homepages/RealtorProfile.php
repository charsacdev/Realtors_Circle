<?php

namespace App\Livewire\Agency\Homepages;

use App\Livewire\Forms\BookingForm;
use App\Models\User;
use Livewire\Component;
use App\Models\Property;

class RealtorProfile extends Component
{
    public $settings;
    public $agency;
    public $user;
    public $properties;
    public BookingForm $form;


    public function mount()
    {
         //Capture the agency slug from the url
         $slug = request()->segment(2);
         $this->agency = User::where('slug', $slug)->first();

         //Capture the user slug from the url
         $user_slug = request()->segment(5);
         $this->user = User::where('slug', $user_slug)->first();
         $this->properties = Property::where('user_id', $this->user->id)
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(10)
                        ->get();

         $this->settings = json_decode($this->agency->settings->settings);
    }


    public function saveBooking()
    {
        if($this->form->store($this->user->id))
        {
            $this->dispatch('success', ['message' => 'Booking request sent successfully, we will contact you shortly.']);
            $this->form->reset();
        
        }else{

            $this->dispatch('failure', ['message' => "Something went wrong, please try again."]);
        }

    }


    public function render()
    {
        return view('livewire.agency.homepages.realtor-profile');
    }
}
