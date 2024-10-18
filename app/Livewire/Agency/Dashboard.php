<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $propertyCount;
    public $customerCount;
    public $bookingCount;
    public $availablePropertyCount;

    public function mount()
    {
        $this->propertyCount = count(Auth::guard('web')->user()->properties);
        $this->availablePropertyCount = count(Auth::guard('web')->user()->availableProperties);
    }

    
    public function render()
    {
        return view('livewire.agency.dashboard');
    }
}
