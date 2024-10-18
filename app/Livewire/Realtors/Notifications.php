<?php

namespace App\Livewire\Realtors;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{
    public $notifications;
    public $user;

    public function mount()
    {
        $this->user = Auth::guard('web')->user();
        $this->notifications = $this->user->notifications;
    }

    public function markAllRead()
    {
        $notifications = Notification::where('user_id', $this->user->id)->get();
        foreach($notifications as $notification){
            $notification->is_read = '1';
            $notification->save();
        }

        $this->dispatch('markallread');

    }

    // Listen for the 'mark read' event
    protected $listeners = ['markread'];
    public function markRead($notification_id)
    {
        $notification = Notification::findOrFail($notification_id);
        $notification->is_read = '1';
        $notification->save();
    }


    public function render()
    {
        return view('livewire.realtors.notifications');
    }
}
