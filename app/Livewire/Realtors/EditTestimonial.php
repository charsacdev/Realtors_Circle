<?php

namespace App\Livewire\Realtors;

use App\Livewire\Forms\UpdateTestimonialForm;
use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EditTestimonial extends Component
{
    use WithFileUploads;

    public $testimonial;
    public $client_image;
   
    public UpdateTestimonialForm $form;

    public function mount($testimonial_id)
    {
        $this->testimonial = Testimonial::findOrFail($testimonial_id);
        $this->form->testimonial = $this->testimonial;
        $this->form->loadTestimonialData();
    }


    public function updateTestimonial()
    {
         $this->form->client_image = $this->client_image;

         if($this->form->update())
         {
            $this->dispatch('success', ['message' => 'Testimonial updated successfully!.']);

       }elseif(!$this->form->update())
       {
           $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
       }
        
    }


    public function render()
    {
        return view('livewire.realtors.edit-testimonial');
    }
}
