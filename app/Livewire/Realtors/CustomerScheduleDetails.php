<?php

namespace App\Livewire\Realtors;

use Livewire\Component;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class CustomerScheduleDetails extends Component
{
    public $schedule;
    public $content;
    public $channel;
    public $subject;

    public $rules = [
        'content' => ['required'],
        'channel' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'content.required' => 'Please provide the content of your message', 
        'channel.required' => 'Please select the channel of your message', 
        'subject.required' => 'Please provide the subject of your message',
    ];

    public function mount($schedule_id)
    {
        $this->schedule = Schedule::findOrFail($schedule_id);

        //Checking if the schedule belongs to the current user
        if(Auth::guard('web')->user()->id != $this->schedule->user_id){
            abort(403);
        }


    }

    
    public function sendMail()
    {
        $this->validate();
        
        if($this->channel == 'email')
        {
            adminSendMail($this, $this->content, $this->schedule->email, $this->schedule->first_name . ' ' . $this->schedule->last_name, $this->subject);
            $this->reset('channel');
        }
    }


    public function render()
    {
        return view('livewire.realtors.customer-schedule-details');
    }
}
