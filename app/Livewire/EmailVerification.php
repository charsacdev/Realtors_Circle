<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailVerification extends Component
{

    public $vs_id;
    public $vn_id;
    public $user;
    public $verified = false;
    public $resend_success;
    public $resend_failure;

    public function mount()
    {
        $this->vs_id = request()->query('vs_id'); 
        $this->vn_id = request()->query('vn_id'); 

        //Route parameter can either be vs_id or vn_id
        if(!$this->vs_id && !$this->vn_id)
        {  
            abort(404);
        }elseif($this->vs_id && $this->vn_id)
        {
            abort(404);
        }

        //check if vn_id is valid
       if($this->vn_id){
            $this->user = User::where('slug', $this->vn_id)
                    ->whereNotNull('verification_token')
                    ->whereNull('email_verified_at')
                    ->first();
            

            if(empty($this->user))
            {
                return redirect()->route('signin');
            }
       }

       //Check if vs_id is valid
       if($this->vs_id){
            $user = User::where('verification_token', $this->vs_id)
                    ->whereNull('email_verified_at')
                    ->first();
            if(empty($user)){
                return redirect()->route('signin');
            }else{
                $user->email_verified_at = now();
                $user->verification_token = null;
                $user->save();

                $this->user = $user;
                $this->verified = true;
            }
       }

        
    }


    public function resendLink()
    {
        
        if(!empty($this->user->verification_token)){

            $vs_url = route('email.verification', ['vs_id' => $this->user->verification_token]);
            
        }else{
            $verification_token = uniqid('', true);
            
            $user = User::where('email', $this->user->email)->get();
            $user->verification_token = $verification_token;
            $user->save();
            
            $vs_url = route('email.verification', ['vs_id' => $user->verification_token]);
        }

        try{

            Mail::to($this->user->email)->send(new EmailVerificationMail($vs_url));
            $this->resend_success = true;
            $this->resend_failure = false;

        }catch(\Exception $e){

            $this->resend_success = false;
            $this->resend_failure = true;
            Log::error('Fail to send email verification link: ' . $e->getMessage());
        }
        

    }



    public function render()
    {
        return view('livewire.email-verification');
    }
}
