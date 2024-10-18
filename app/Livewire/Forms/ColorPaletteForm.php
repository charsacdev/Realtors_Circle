<?php

namespace App\Livewire\Forms;

use App\Models\ColorPalette;
use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ColorPaletteForm extends Form
{
    public $primary_color;
    public $secondary_color;
    public $accent_color;
    public $text_color;
    public $is_active;


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


    public function store()
    {

        $user_id = Auth::user()->id;
        
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

            $palette = new ColorPalette();
            $palette->user_id = $user_id;
            $palette->primary_color = $this->primary_color;
            $palette->secondary_color = $this->secondary_color;
            $palette->accent_color = $this->accent_color;
            $palette->text_color = $this->text_color;
            $palette->is_active = $this->is_active;
            $palette->save();

            return true;

        }catch(\Exception $e){
            return false;
            Log::info("Creation of colorpalette faild: " . $e->getMessage());
        }
        
    }
}
