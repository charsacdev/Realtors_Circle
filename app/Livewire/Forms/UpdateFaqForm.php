<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Faq;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;

class UpdateFaqForm extends Form
{

    public $question;
    public $response;
    public $faq;

    protected $rules = [
        'question' => ['required', 'string'],
        'response' => ['required', 'string'],
    ];

    public $messages = [
        'questions.required' => "Please provide a question",
        'response.required' => "Please provide a response"
    ];
    
    public function loadFaqData()
    {

        $this->question = $this->faq->question;
        $this->response = $this->faq->response;


        // Check if the authenticated user can view this faq
        if($this->faq->user_id != auth('web')->user()->id)
        {
            abort(403);
        }
    }


    public function update()
    {
        if($this->faq->user_id != auth('web')->user()->id)
        {
            abort(403);
        }

        $this->validate($this->rules, $this->messages);

        try{

             //update faq to the database
             $faq = Faq::findOrFail($this->faq->id);
             $faq->question = $this->question;
             $faq->response = $this->response;
             $faq->save();

            return true;

        }catch(\Exception $e){

            // Log the error message (optional)
            Log::error('faq update failed: ' . $e->getMessage());
            // Return false if an exception occurs
            return false;
        }
    }
}
