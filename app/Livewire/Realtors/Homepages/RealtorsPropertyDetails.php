<?php

namespace App\Livewire\Realtors\Homepages;

use App\Livewire\Forms\BookingForm;
use App\Models\User;
use Livewire\Component;
use App\Models\Property;

class RealtorsPropertyDetails extends Component
{
    public $user;
    public $property;
    public $otherProperties;
    public BookingForm $form;

    public function mount()
    {
        $user_slug = request()->segment(2);
        $property_id = request()->segment(count(request()->segments()));

        $this->user = User::where('slug', $user_slug)->first();
        $this->property = Property::where('user_id', $this->user->id)
                        ->where('id', $property_id)
                        ->first();

        $this->otherProperties = Property::where('user_id', $this->user->id)
                    ->whereNot('id', $this->property->id)
                    ->limit(3)
                    ->inRandomOrder()
                    ->get();
    }

    public function saveBooking()
    {
        if($this->form->store($this->user->id))
        {
            $this->dispatch('success', ['message' => 'Booking request sent successfully, our realtor will contact you shortly.']);
            $this->form->reset();
        
        }else{

            $this->dispatch('failure', ['message' => "Something went wrong, please try again."]);
        }
    }


    public function render()
    {
        return view('livewire.realtors.homepages.realtors-property-details');
    }
}
