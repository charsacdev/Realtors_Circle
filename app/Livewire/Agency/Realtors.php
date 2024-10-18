<?php

namespace App\Livewire\Agency;

use Livewire\Component;

class Realtors extends Component
{
    public $realtors;
    public $applications;

    public function mount()
    {
        $this->realtors = auth('web')->user()->realtors;
        $this->applications = auth('web')->user()->realtorApplications;

    }


    public function render()
    {
        return view('livewire.agency.realtors');
    }
}
