<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\TeamForm;

class CreateTeam extends Component
{
    use WithFileUploads;
    
    public TeamForm $form;
    public $team_image;

    public function createTeam()
    {
        $this->form->team_image = $this->team_image;

        if($this->form->store()){
            
            $this->form->reset();
            $this->team_image = null;
            $this->dispatch('success', ['message' => 'Team member created successfully!.']);
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }

    
    public function render()
    {
        return view('livewire.agency.create-team');
    }
}
