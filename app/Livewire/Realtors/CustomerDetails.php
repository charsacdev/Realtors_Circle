<?php

namespace App\Livewire\Realtors;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerDetails extends Component
{
    public $customer;

    public function mount($customer_id)
    {

        $this->customer = Customer::findOrFail($customer_id);

        //Checking if the current user can view this customer
        if(Auth::guard('web')->user()->id != $this->customer->user_id)
        {
            abort(403);
        }
    }
    public function render()
    {
        return view('livewire.realtors.customer-details');
    }
}
