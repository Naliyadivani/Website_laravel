<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NikRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
   
    public function passes($attribute, $value)
        {
            // Your validation logic here
            return $value == 'user' || $value == 'admin';
        }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    

    public function message()
    {
        return 'The :attribute is invalid.';
    }
}
