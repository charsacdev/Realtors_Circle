<?php

namespace App\Livewire\Agency\Homepages;

use App\Livewire\Forms\BookingForm;
use App\Models\User;
use Livewire\Component;
use App\Models\Property;

class PropertiesDetails extends Component
{
    public $agency;
    public $settings;
    public $property;
    public $user;
    public $otherProperties;
    public BookingForm $form;

    public function mount()
    {
        //Capture the agency slug from the url
        $slug = request()->segment(2);
        $this->agency = User::where('slug', $slug)->first();

        $property_id = request()->segment(5);
        $this->property = Property::findOrFail($property_id);

        $this->user = User::findOrFail($this->property->user_id);

        $this->settings = json_decode($this->agency->settings->settings);

        $this->otherProperties = Property::whereNot('id', $this->property->id)
                            ->where('user_id', $this->agency->id)
                            ->where('status', 1)
                            ->inRandomOrder()
                            ->limit(3)
                            ->get();
        
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
        return view('livewire.agency.homepages.properties-details');
    }
}
