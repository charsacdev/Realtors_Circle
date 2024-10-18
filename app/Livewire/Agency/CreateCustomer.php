<?php

namespace App\Livewire\Agency;

use Livewire\Component;
use App\Livewire\Forms\CustomerForm;
use Livewire\WithFileUploads;

class CreateCustomer extends Component
{
    use WithFileUploads;

    public $image;

    public CustomerForm $form;

    public function saveCustomer()
    {
        $this->form->image = $this->image;

        if($this->form->store())
        {
            $this->dispatch('success', ['message' => 'Customer successfully created!.']);
            $this->form->reset();
            $this->image = '';
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again']);
        }
    }


    public function render()
    {
        return view('livewire.agency.create-customer');
    }
}
