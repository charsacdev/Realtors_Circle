<?php

namespace App\Rules;

use Closure;
use App\Models\Customer;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueCustomerForUser implements ValidationRule
{
    protected $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the email already exists for the given realtor_id
        $exists = Customer::where('email', $value)
                        ->orWhere('phone_number', $value)
                        ->where('user_id', $this->user_id)
                        ->exists();

        if ($exists) {
            $fail('You already added this customer');
        }
    }
}
