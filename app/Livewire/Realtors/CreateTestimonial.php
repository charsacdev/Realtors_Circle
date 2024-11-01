<?php

namespace App\Livewire\Realtors;

use App\Livewire\Forms\TestimonialForm;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTestimonial extends Component
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
        return view('livewire.realtors.create-testimonial');
    }
}
