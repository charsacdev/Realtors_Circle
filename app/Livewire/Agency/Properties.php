<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Properties extends Component
{
    public $properties; 

    public function mount()
    {
        $this->properties = Auth::guard('web')->user()->properties;
    }
    
    public function render()
    {
        return view('livewire.agency.properties');
    }
}
