<?php

namespace App\Livewire\Agency;

use Livewire\Component;

class AppointmentBooking extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = auth('web')->user()->schedules;
    }


    public function render()
    {
        return view('livewire.agency.appointment-booking');
    }
}
