<?php

namespace App\Http\Requests\Auth;

use App\Events\Auth\PhoneNumberVerifiedEvent;
use Illuminate\Foundation\Http\FormRequest;

class PhoneNumberVerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (! hash_equals((string) $this->route('id'),
                          (string) $this->user()->getKey())) {
            return false;
        }

        if (! hash_equals((string) $this->route('hash'),
                          sha1($this->user()->getPhoneNumberForVerification()))) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Fulfill the phone number verification request.
     *
     * @return bool
     */
    public function fulfill(): bool
    {
        if (!$this->user()->hasVerifiedPhoneNumber()) {
            $verified = $this->user()->markPhoneNumberAsVerified();
            
            $verified && event(new PhoneNumberVerifiedEvent($this->user()));
            
            return $verified;
        }

        return $this->user()->hasVerifiedPhoneNumber();
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        return $validator;
    }
}
