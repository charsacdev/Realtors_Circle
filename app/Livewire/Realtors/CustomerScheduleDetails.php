<?php

namespace App\Livewire\Realtors;

use Livewire\Component;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class CustomerScheduleDetails extends Component
{
    public $schedule;

    public function mount($schedule_id)
    {
        $this->schedule = Schedule::findOrFail($schedule_id);

        //Checking if the schedule belongs to the current user
        if(Auth::guard('web')->user()->id != $this->schedule->user_id){
            abort(403);
        }


    }


    public function render()
    {
        return view('livewire.realtors.customer-schedule-details');
    }
}
