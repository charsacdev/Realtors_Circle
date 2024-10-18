<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Customers extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Auth::guard('web')->user()->customers;
    }

    
    public function render()
    {
        return view('livewire.agency.customers');
    }
}
