<?php

namespace App\Livewire\Agency;

use App\Models\Schedule;
use Livewire\Component;

class MessageInquiry extends Component
{
    public $inquiry;

    public function mount($inquiry_id)
    {
        $this->inquiry = Schedule::findOrFail($inquiry_id);
        
        if($this->inquiry->user_id != auth('web')->user()->id)
        {
            abort(403);
        }
    }
    public function render()
    {
        return view('livewire.agency.message-inquiry');
    }
}
