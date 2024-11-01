<?php

namespace App\Livewire\Realtors;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerDetails extends Component
{
    public $customer;

    public $content;
    public $subject;
    public $channel;


    public $rules = [
        'channel' => ['required'],
        'content' => ['required'],
        'subject' => ['required'],
    ];

    public $messages = [
        'channel.required' => 'Please select recipients.',
        'content.required' => "Please enter message content.",
        'subject.required' => "Please enter message subject",
    ];


    public function mount($customer_id)
    {

        $this->customer = Customer::findOrFail($customer_id);

        //Checking if the current user can view this customer
        if(Auth::guard('web')->user()->id != $this->customer->user_id)
        {
            abort(403);
        }
    }


    public function sendMail()
    {
        $this->validate();

        if($this->channel == 'email'){
            adminSendMail($this, $this->content, $this->customer->email, $this->customer->first_name . ' ' . $this->customer->last_name, $this->subject);
        }
    }




    public function render()
    {
        return view('livewire.realtors.customer-details');
    }
}
