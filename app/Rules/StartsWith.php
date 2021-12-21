<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StartsWith implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the value starts with a prefix (specified in the config/custom file), validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        function startsWith($string, $startString)
        {
            $len = strlen($startString);
            return (substr($string, 0, $len) === $startString);
        }

        $telcos = collect(config('custom.telcos'));

        return boolval($telcos->flatten()->search(function ($prefix) use ($value) {
            return startsWith($value, $prefix);
        }));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
