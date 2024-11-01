<?php

namespace App\Livewire\Agency;

use App\Mail\MeetingScheduleMail;
use App\Models\User;
use Livewire\Component;
use App\Models\RealtorApplication;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class RealtorsScheduleMeeting extends Component
{
    public $realtor;
    public $agency;
    public $google_meet_url;
    public $subject;
    public $content;

    public $rules = [
        'google_meet_url' => ['required', 'url'],
        'subject' => ['required'],
        'content' => ['required'],
    ];


    public function mount($realtor_id)
    {
        $this->realtor = User::findOrFail($realtor_id);

        $is_authorized = RealtorApplication::where(['realtor_id' => $this->realtor->id, 'agency_id' => auth('web')->user()->id])
                        ->exists();

        if(!$is_authorized)
        {
            abort(403);
        }

        $this->agency = auth('web')->user();

    }


    public function sendMail()
    {
        $this->content = cleanContent($this->content);
        $this->validate();

        $agency = $this->agency->company_name;
        $agency_email = $this->agency->email;
        $link = $this->google_meet_url;
        $content = $this->content;
        $subject = $this->subject;

        try{

            Mail::to($this->realtor->email)->send(new MeetingScheduleMail($link, $subject, $content, $agency, $agency_email));
            $this->dispatch('success', ['message' => 'Mail sent successfully!.']);
            $this->dispatch('resetEditor');
            $this->reset(['subject', 'google_meet_url']);

        }catch(\Exception $e){
            $this->dispatch('failure', ['message' => "Something went wrong, please try again."]);
        }
    }


    public function render()
    {
        return view('livewire.agency.realtors-schedule-meeting');
    }
}
