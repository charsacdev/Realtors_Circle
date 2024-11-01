<?php

namespace App\Livewire\Realtors\Homepages;

use App\Models\User;
use Livewire\Component;
use App\Models\Property;
use App\Models\Schedule;
use App\Models\Notification;
use App\Livewire\Forms\BookingForm;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class RealtorsProfile extends Component
{
    public $user;
    public $properties;

    public BookingForm $form;
   
    public function mount()
    {
        $slug = request()->segment(count(request()->segments()));

        //Check if the route parameter is valid
        $is_valid = User::where('slug', $slug)->exists();
        if(!$is_valid){
            abort(404);
        }

        $this->user = User::where('slug', $slug)->first();
        $this->properties = Property::where('user_id', $this->user->id)
                ->where('status', 1)
                ->orderBy('id', 'DESC')
                ->inRandomOrder()
                ->limit(6)
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
        return view('livewire.realtors.homepages.realtors-profile');
    }
}
