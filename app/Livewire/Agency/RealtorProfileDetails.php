<?php

namespace App\Livewire\Agency;

use App\Models\User;
use Livewire\Component;

class RealtorProfileDetails extends Component
{
    public $realtor;
    
    public function mount($realtor_id)
    {
        $this->realtor = User::findOrFail($realtor_id);
    }


    public function render()
    {
        return view('livewire.agency.realtor-profile-details');
    }
}
