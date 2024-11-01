<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\User;
use Livewire\Component;

class Aboutus extends Component
{
    public $agency;
    public $settings;

    public function mount()
    {
         //Capture the agency slug from the url
         $slug = request()->segment(2);
         $this->agency = User::where('slug', $slug)->first();
         $this->settings = json_decode($this->agency->settings->settings);
    }


    public function render()
    {
        return view('livewire.agency.homepages.aboutus');
    }
}
