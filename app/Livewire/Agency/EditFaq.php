<?php

namespace App\Livewire\Agency;

use App\Livewire\Forms\UpdateFaqForm;
use App\Models\Faq;
use Livewire\Component;

class EditFaq extends Component
{
    public $faq;
    public UpdateFaqForm $form;
    public $question;
    public $response;


    
    public function mount($faq_id)
    {
        $this->faq = Faq::findOrFail($faq_id);
        $this->form->faq = $this->faq;
        $this->form->loadFaqData();

    }


    public function updateFaq()
    {
         if($this->form->update())
         {
            $this->dispatch('success', ['message' => 'FAQ updated successfully!.']);

       }elseif(!$this->form->update())
       {
           $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
       }
    }



    public function render()
    {
        return view('livewire.agency.edit-faq');
    }
}
