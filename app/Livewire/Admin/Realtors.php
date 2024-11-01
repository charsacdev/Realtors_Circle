<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Realtors extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::where('role', 'realtor')->get();

    }
    public function render()
    {
        return view('livewire.admin.realtors');
    }
}
