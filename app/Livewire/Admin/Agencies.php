<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Agencies extends Component
{
    public $agencies;

    public function mount()
    {
        $this->agencies = User::where('role', 'agency')->get();
    }
    
    public function render()
    {
        return view('livewire.admin.agencies');
    }
}
