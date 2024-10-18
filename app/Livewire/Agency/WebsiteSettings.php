<?php

namespace App\Livewire\Agency;

use App\Livewire\Forms\WebsiteSettingForm;
use App\Models\Faq;
use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\WithFileUploads;

class WebsiteSettings extends Component
{
    use WithFileUploads;
    
    public $user;
    public $testimonials;
    public $colorPalettes;
    public $faqs;
    public $settings; 
    public WebsiteSettingForm $form;

    public $new_logo;
    public $new_banner_image;


    public function mount()
    {
        $this->user = Auth::guard('web')->user();
        
        //Load user testimonials
        $this->testimonials = $this->user->testimonials;

        //Load user faqs 
        $this->faqs = $this->user->faqs;

        //Load user color palettes
        $this->colorPalettes = $this->user->colorPalettes;

        //Load user website settings
        $this->settings = json_decode(@$this->user->settings->settings);

        $this->form->loadSettings($this->settings);
  
    }


    public function saveWebsettings()
    {
        $this->form->logo = $this->new_logo;
        $this->form->banner_image = $this->new_banner_image;

        if($this->form->store($this->settings))
        {
            $this->dispatch('success', ['message' => 'Settings updated successfully!.']);
        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        }

    }


    // Listen for the 'deleteTestimonial' event
    protected $listeners = ['deleteTestimonial'];
    public function deleteTestimonial($source_id)
    {
    
        $testimonial = Testimonial::findOrFail($source_id);

            // Check if the authenticated user can delete this testimonial
            if (!auth()->user() || !Gate::allows('delete', $testimonial)) {
            abort(403, 'Unauthorized action.');
        }

        if($testimonial->delete())
        {
            //dispatching a deleted event
            $this->dispatch('deleted', [
                'message' => 'Testimonial deleted successfully!', 
                'id' => $testimonial->id,
                'src' => "testimonial", // Element id that needs to be removed on the frontend
            ]);

        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        } 
    }


    // Listen for the 'deleteFaq' event
    #[On('deleteFaq')]
    public function deleteFaq($source_id)
    {
        $faq = Faq::findOrFail($source_id);

        if(auth('web')->user()->id != $faq->user_id)
        {
            abort(403);
        }

        if($faq->delete())
        {
            //dispatching a deleted event
            $this->dispatch('deleted', [
                'message' => 'FAQ deleted successfully!', 
                'id' => $faq->id,
                'src' => "faq", // Element id that needs to be removed on the frontend
            ]);

        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        } 
        
    }


    public function render()
    {
        return view('livewire.agency.website-settings');
    }
}
