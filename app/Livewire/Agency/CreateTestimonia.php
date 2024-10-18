<?php

namespace App\Livewire\Agency;
use Livewire\WithFileUploads;
use App\Livewire\Forms\TestimonialForm;

use Livewire\Component;

class CreateTestimonia extends Component
{
    use WithFileUploads;

    public TestimonialForm $form;
    public $client_image;



    public function createTestimonial() 
    {
        $this->form->client_image = $this->client_image;

        if($this->form->store()){
            
            $this->form->reset();
            $this->client_image = null;
            $this->dispatch('success', ['message' => 'Testimonial created successfully!.']);
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }
    }
    
    public function render()
    {
        return view('livewire.agency.create-testimonia');
    }
}
