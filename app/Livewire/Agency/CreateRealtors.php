<?php

namespace App\Livewire\Agency;

use App\Models\AgencyRealtor;
use App\Models\RealtorApplication;
use App\Models\User;
use Livewire\Component;

class CreateRealtors extends Component
{
    public $email;
    public $realtor;
    public $user;
    public $errorMessage;


    public function findUserByEmail()
    {
        //Check that the email is associated with an account
       $exists =  User::where('email', $this->email)->exists();
       if($exists)
       {
            //Fetching the account with email address
            $this->user = User::where('email', $this->email)->first();

            //Check that the account type is not agency or admin
            if($this->user->role == 'agency' || $this->user->role == 'admin'){

                $this->realtor = null;
                $this->errorMessage = "We could not find any realtor with this email address";

                return;
            }

            //Check that the realtor is not assigned to any agency
            $is_assigned = AgencyRealtor::where('realtor_id', $this->user->id)->exists();

            if($is_assigned){

                $this->errorMessage = "The realtor you're trying to add is already associated with your agency or another agency.";
                $this->realtor = null;

            }else{
                $this->realtor = $this->user;
            }     
            
       }else{
            $this->realtor = null;
            $this->errorMessage = "We could not find any realtor with this email address";
       }
        
    }

    //Method to add realtor to the agency 
    public function addRealtor()
    {

        //Check if realtor applied to the agency
        $application = RealtorApplication::where('realtor_id', $this->realtor->id)->where('agency_id', auth('web')->user()->id)->first();

        if(!empty($application)){
            // Delete realtors application
            $application->delete();
        }else{

           //Check that the realtor is not assigned to any agency
           $is_assigned = AgencyRealtor::where('realtor_id', $this->user->id)->exists(); 
           if($is_assigned){
                $this->dispatch('failure', ['message' => "The realtor you're trying to add is already associated with your agency or another agency."]);
                return;
           }

        //    Assign realtor to agency
           $newRealtor = new AgencyRealtor();
           $newRealtor->realtor_id = $this->user->id;
           $newRealtor->agency_id = auth('web')->user()->id;
           $newRealtor->save();

           $this->reset();
           $this->dispatch('success', ['message' => 'New realtor successfully added to your agency!']);
        }


    }


    public function render()
    {
        return view('livewire.agency.create-realtors');
    }
}
