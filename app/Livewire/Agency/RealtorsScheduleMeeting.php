<?php

namespace App\Livewire\Agency;

use App\Models\User;
use Livewire\Component;
use App\Models\RealtorApplication;

class RealtorsScheduleMeeting extends Component
{
    public $realtor;



    public function mount($realtor_id)
    {
        $this->realtor = User::findOrFail($realtor_id);

        $is_authorized = RealtorApplication::where(['realtor_id' => $this->realtor->id, 'agency_id' => auth('web')->user()->id])
                        ->exists();

        if(!$is_authorized)
        {
            abort(403);
        }

    }


    public function render()
    {
        return view('livewire.agency.realtors-schedule-meeting');
    }
}
