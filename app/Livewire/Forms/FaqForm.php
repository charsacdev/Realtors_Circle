<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Faq;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class FaqForm extends Form
{
    public $question;
    public $response;

    public $rules = [
        'question' => ['required', 'string'],
        'response' => ['required', 'string']
    ];

    public $messages = [
        'questions.required' => "Please provide a question",
        'response.required' => "Please provide a response"
    ];


    public function store()
    {
        //Current user
        $user = User::findOrFail(Auth::guard('web')->user()->id);
        
        //Validating input fields
        $this->validate($this->rules, $this->messages);
        
        try{


             //Save faq to the database
             $faq = new Faq();
             $faq->user_id = $user->id;
             $faq->question = $this->question;
             $faq->response = $this->response;
             $faq->save();
            
             return true;

        }catch(\Exception $e){
             // Log the error message (optional)
             Log::error('create faq failed: ' . $e->getMessage());
             // Return false if an exception occurs
             return false;
        }
    }
}
