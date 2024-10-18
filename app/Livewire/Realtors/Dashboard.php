<?php

namespace App\Livewire\Realtors;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $propertyCount;
    public $customerCount;
    public $bookingCount;
    public $availablePropertyCount;

    public function mount()
    {
        $this->propertyCount = count(Auth::guard('web')->user()->properties);
        $this->customerCount = count(Auth::guard('web')->user()->customers);
        $this->bookingCount = count(Auth::guard('web')->user()->schedules);
        $this->availablePropertyCount = count(Auth::guard('web')->user()->availableProperties);
    }

    
    public function render()
    {
        return view('livewire.realtors.dashboard');
    }
}
