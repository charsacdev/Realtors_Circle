<?php

namespace App\Livewire\Agency;

use App\Models\Team;
use Livewire\Component;
use App\Livewire\Forms\TeamForm;

class EditTeam extends Component
{
    public $team;
    public $new_image;

    public TeamForm $form;

    public function mount($team_id)
    {
        $this->team = Team::findOrFail($team_id);
        $this->form->team_name = $this->team->team_name;
        $this->form->team_position = $this->team->team_position;
        $this->form->status = $this->team->status;
        
    }


    public function updateTeam()
    {
        $this->form->team_image = $this->new_image;
        if($this->form->update($this->team))
        {
           $this->dispatch('success', ['message' => 'Team member updated successfully!.']);

        }else
        {
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }


    public function render()
    {
        return view('livewire.agency.edit-team');
    }
}
