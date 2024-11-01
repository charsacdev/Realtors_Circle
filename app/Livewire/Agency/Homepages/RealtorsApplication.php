<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\User;
use Livewire\Component;
use App\Models\Notification;
use App\Models\AgencyRealtor;
use App\Models\RealtorApplication;
use Illuminate\Support\Facades\Auth;

class RealtorsApplication extends Component
{
    public $agency;
    public $settings;
    public $user;
    public $is_realtor;
    public $is_agency;

    public function mount()
    {
         //Capture the agency slug from the url
         $slug = request()->segment(2);
         $this->agency = User::where('slug', $slug)->first();
         $this->user = Auth::guard('web')->user();
 
         $this->settings = json_decode($this->agency->settings->settings);

        //check if realtor already agency realtor 
        $this->is_realtor = AgencyRealtor::where(['agency_id' => $this->agency->id, 'realtor_id' => $this->user->id])
                ->exists();

        //Check if user is an agency
        if($this->user->role != 'realtor'){
            $this->is_agency = true;
        }
    }

    public function saveApplication()
    {
        //check if realtor already applied to agency
        $is_applied = RealtorApplication::where(['agency_id' => $this->agency->id, 'realtor_id' => $this->user->id])
                    ->exists();
        
        if($is_applied)
        {
            $this->dispatch('failure', ['message' => 'Sorry. You have a pending application with ' . $this->agency->company_name]);
            return;

        }
        
        if($this->is_realtor)
        {
            $this->dispatch('failure', ['message' => 'You already belong to ' . $this->agency->company_name]);
            return;
        }


        $application = new RealtorApplication();
        $application->agency_id = $this->agency->id;
        $application->realtor_id = $this->user->id;
        $application->is_seen = 0;
        $application->save();

        //Registering notification
        $notification = new Notification();
        $notification->user_id = $this->agency->id;
        $notification->route_id = $application->id;
        $notification->title = "Realtor Application";
        $notification->type = 'realtor-application';
        $notification->message = "You have a new realtor application";
        $notification->is_read = 0;
        $notification->save();

        $this->dispatch('success', ['message' => 'Application successfully submitted']);
        
    }


    public function render()
    {
        return view('livewire.agency.homepages.realtors-application');
    }
}
