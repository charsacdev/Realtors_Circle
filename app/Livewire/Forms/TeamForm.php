<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Team;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class TeamForm extends Form
{
    public $team_image;
    public $team_name;
    public $team_position;
    public $status;

    public function rules($image = null){
        
        return [
            'team_image' => $image ? ['nullable', 'image', 'mimes:jpg,jpeg,gif,png', 'max:1024'] : ['required', 'image', 'mimes:jpg,jpeg,gif,png', 'max:1024'],
            'team_name' => ['required'],
            'team_position' => ['required']
        ];
    }


    public function messages(){
        return [
            'team_image.required' => 'Please upload team image',
            'team_image.image' => "Please upload an image",
            'team_image.mimes' => "Unsupported file. Supported image types: jpg,jpeg,png,and gif",
            'team_image.max' => "Image file is too large. Image size should not be more than 1MB",
            'team_name.required' => "Please provide team name",
            'team_position.required' => "Please provide team name",
        ];
    } 


    public function store()
    {
         //Current user
         $user = User::findOrFail(Auth::guard('web')->user()->id);

        //Validating input fields
        $this->validate($this->rules(), $this->messages());

        try{
             // Store the new image and retrieve only its name
             $team_image_path = $this->team_image->store('public/uploads');
             $team_image = basename($team_image_path);

             $team = new Team();
             $team->user_id = $user->id;
             $team->team_image = $team_image;
             $team->team_name = $this->team_name;
             $team->team_position = $this->team_position;
             $team->status = $this->status;
             $team->save();

             return true;

        }catch(\Exception $e){
            Log::error('Failed to create team member ' . $e->getMessage());
            return false;
        }
    }


    public function update($team)
    {
         // Check if the authenticated user can update this testimonial
         if (auth()->user()->id != $team->user_id) {
            abort(403, 'Unauthorized action.');
        }

         $this->validate($this->rules($team->team_image), $this->messages());


        try{

            //Check if user selected a new image
            if($this->team_image){

                // Check if there is an existing image and delete it
                if ($team->team_image && Storage::exists('public/uploads/' . $team->team_image)) {
                    Storage::delete('public/uploads/' . $team->team_image);
                }

                // Store the new image and retrieve only its name
                $new_team_image_path = $this->team_image->store('public/uploads');
                $new_team_image = basename($new_team_image_path);

            }else{

                //set new image to old image if no new image is selected
               $new_team_image = $team->team_image;
            }

            $team = Team::findOrFail($team->id);
            $team->user_id = auth()->user()->id;
            $team->team_image = $new_team_image;
            $team->team_name = $this->team_name;
            $team->team_position = $this->team_position;
            $team->status = $this->status;
            $team->save();
            

            return true;

        }catch(\Exception $e){
            Log::error('Edit team member failed ' . $e->getMessage());
            return false;
        }
    }
}
