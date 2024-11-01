<?php

namespace App\Livewire\Agency;

use App\Livewire\Forms\FaqForm;
use Livewire\Component;

class CreateFaq extends Component
{

    public FaqForm $form;

    public function createFaq() 
    {

        if($this->form->store()){
            
            $this->form->reset();
            $this->dispatch('success', ['message' => 'FAQ created successfully!.']);
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }


    public function render()
    {
        return view('livewire.agency.create-faq');
    }
}
