<?php

namespace App\Livewire\Agency;

use App\Models\Faq;
use App\Models\Team;
use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Livewire\Forms\WebsiteSettingForm;

class WebsiteSettings extends Component
{
    use WithFileUploads;
    
    public $user;
    public $testimonials;
    public $teams;
    public $colorPalettes;
    public $faqs;
    public $settings; 
    public WebsiteSettingForm $form;

    public $new_logo;
    public $new_banner_image;
    public $about;


    public function mount()
    {
        $this->user = Auth::guard('web')->user();
        
        //Load user testimonials
        $this->testimonials = $this->user->testimonials;

        //Load user teams
        $this->teams = $this->user->teams;

        //Load user faqs 
        $this->faqs = $this->user->faqs;

        //Load user color palettes
        $this->colorPalettes = $this->user->colorPalettes;

        //Load user website settings
        $this->settings = json_decode(@$this->user->settings->settings);
        
        $this->form->loadSettings($this->settings);

        $this->about = $this->form->about;
  
    }


    public function saveWebsettings()
    {
        $this->form->logo = $this->new_logo;
        $this->form->banner_image = $this->new_banner_image;
        $this->form->about = $this->about;

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
                'src' => "testimonial", 
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
                'src' => "faq", 
            ]);

        }else{
            $this->dispatch('failure', ['message' => 'Something went wrong, please try again.']);
        } 
        
    }

    // Listen for the 'deleteTeam' event
    #[On('deleteTeam')]
    public function deleteTeam($source_id)
    {
        $team = Team::findOrFail($source_id);

        if(auth('web')->user()->id != $team->user_id)
        {
            abort(403);
        }

        if($team->delete())
        {
            //dispatching a deleted event
            $this->dispatch('deleted', [
                'message' => 'Team member deleted successfully!', 
                'id' => $team->id,
                'src' => "team", 
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
