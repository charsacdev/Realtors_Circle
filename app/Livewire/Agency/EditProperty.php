<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class EditProperty extends Component
{
    public $property;

    public function mount($property_id)
    {
        $this->property = Property::findOrFail($property_id);
        if($this->property->user_id != Auth::guard('web')->user()->id)
        {
            abort(403);
        }
    }

    
    public function render()
    {
        return view('livewire.agency.edit-property');
    }
}
