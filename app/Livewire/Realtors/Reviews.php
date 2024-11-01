<?php

namespace App\Livewire\Realtors;

use Livewire\Component;
use Livewire\WithFileUploads;

class Reviews extends Component
{
    use WithFileUploads;

    public $isEditing = false;

    public function render()
    {
        return view('livewire.realtors.reviews');
    }
}
