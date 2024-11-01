<?php

namespace App\Livewire\Realtors;

use Livewire\Component;

class CustomerSchedules extends Component
{
    public $schedules;

    public function mount()
    {
        $this->schedules = auth('web')->user()->schedules;

    }


    public function render()
    {
        return view('livewire.realtors.customer-schedules');
    }
}
