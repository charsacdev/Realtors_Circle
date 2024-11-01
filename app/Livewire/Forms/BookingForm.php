<?php

namespace App\Livewire\Forms;

use App\Models\Notification;
use App\Models\Schedule;
use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;

class BookingForm extends Form
{

    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $reason;
    public $date_booked;

    public $rules = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'phone_number' => ['required'],
        'reason' => ['required']
    ];

    public function store($user_id)
    {

        $this->validate();

        try{
            //Registering booking
            $booking = new Schedule();
            $booking->user_id = $user_id;
            $booking->first_name = $this->first_name;
            $booking->last_name = $this->last_name;
            $booking->email = $this->email;
            $booking->phone_number = $this->phone_number;
            $booking->reason = $this->reason;
            $booking->date_booked = now();
            $booking->save();


            //Registering notification
            $notification = new Notification();
            $notification->user_id = $user_id;
            $notification->route_id = $booking->id;
            $notification->title = "Booking";
            $notification->type = 'booking';
            $notification->message = "You have a new booking request";
            $notification->is_read = 0;
            $notification->save();


            return true;


        }catch(\Exception $e){
            Log::error('Failed to register booking: ' . $e->getMessage());
            return false;
        }
    }
}
