<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\ColorPalette;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;

class UpdateColorpaletteForm extends Form
{
    public $is_active;
    public $primary_color;
    public $secondary_color;
    public $accent_color;
    public $text_color;
    public $palette;

    protected $rules = [
        'primary_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}([0-9A-Fa-f]{2})?$/'],
        'secondary_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}([0-9A-Fa-f]{2})?$/'],
        'accent_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}([0-9A-Fa-f]{2})?$/'],
        'text_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}([0-9A-Fa-f]{2})?$/'],
    ];


    protected $messages = [
        'primary_color.required' => "Please provide a primary color",
        'secondary_color.required' => "Please provide a secondary color",
        'accent_color.required' => "Please provide an accent color",
        'text_color.required' => "Please provide a text color",
    ];

    


    public function update()
    {

        $user_id = auth('web')->user()->id; 

        if($this->palette->user_id != $user_id)
        {
            abort(403);
        }

        $this->validate($this->rules, $this->messages);

        try{

            if($this->is_active == 1 || $this->is_active == '1'){
                $userPalettes = ColorPalette::where('user_id', $user_id)->get();
                if(!empty($userPalettes)){
                    foreach($userPalettes as $palette){
                        $palette->is_active = 0;
                        $palette->save();
                    }
                }
            }

            $palette = ColorPalette::findOrFail($this->palette->id);
            $palette->user_id = $user_id;
            $palette->primary_color = $this->primary_color;
            $palette->secondary_color = $this->secondary_color;
            $palette->accent_color = $this->accent_color;
            $palette->text_color = $this->text_color;
            $palette->is_active = $this->is_active;
            $palette->save();

            return true;

        }catch(\Exception $e){

            // Log the error message (optional)
            Log::error('color palette update failed: ' . $e->getMessage());
            // Return false if an exception occurs
            return false;
        }
    }
}
