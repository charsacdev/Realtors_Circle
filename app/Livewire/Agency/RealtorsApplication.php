<?php

namespace App\Livewire\Agency;

use App\Models\User;
use Livewire\Component;
use App\Models\RealtorApplication;

class RealtorsApplication extends Component
{
    public $applicant;

    public function mount($application_id)
    {
        $this->applicant = User::findOrFail($application_id);

        $is_authorized = RealtorApplication::where(['realtor_id' => $this->applicant->id, 'agency_id' => auth('web')->user()->id])
                        ->exists();

        if(!$is_authorized)
        {
            abort(403);
        }
    }


    public function render()
    {
        return view('livewire.agency.realtors-application');
    }
}
