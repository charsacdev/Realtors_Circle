<?php

namespace App\Livewire\Agency;

use App\Livewire\Forms\UpdateColorpaletteForm;
use App\Models\ColorPalette;
use Livewire\Component;

class EditColorpalette extends Component
{
    public $palette;
    public UpdateColorpaletteForm $form;
    public $primary_color;
    public $secondary_color;
    public $accent_color;
    public $text_color;
    public $is_active;


    
    public function mount($palette_id)
    {
        $this->palette = ColorPalette::findOrFail($palette_id);
        $this->form->palette = $this->palette;
    
        $this->is_active = $this->palette->is_active;
        $this->primary_color = $this->palette->primary_color;
        $this->secondary_color = $this->palette->secondary_color;
        $this->accent_color = $this->palette->accent_color;
        $this->text_color = $this->palette->text_color;

        // Check if the authenticated user can view this faq
        if($this->palette->user_id != auth('web')->user()->id)
        {
            abort(403);
        }
    }


    public function updateColors()
    {

         if($this->form->update())
         {
            $this->dispatch('success', ['message' => 'Color palette updated successfully!.']);

        }elseif(!$this->form->update())
        {
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }



    public function render()
    {
        return view('livewire.agency.edit-colorpalette');
    }
}
