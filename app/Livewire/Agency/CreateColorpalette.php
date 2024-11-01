<?php

namespace App\Livewire\Agency;

use App\Livewire\Forms\ColorPaletteForm;
use Livewire\Component;

class CreateColorpalette extends Component
{
    public ColorPaletteForm $form;



    public function saveColors()
    {
        if($this->form->store()){
            $this->dispatch('success', ['message' => 'Color palette created successfully.']);
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }


    public function render()
    {
        return view('livewire.agency.create-colorpalette');
    }
}
