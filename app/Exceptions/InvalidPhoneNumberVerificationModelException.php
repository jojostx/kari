<?php

namespace App\Exceptions;

use Exception;

class InvalidPhoneNumberVerificationModelException extends Exception
{
  public function __construct()
    {    
        parent::__construct('Unable to instantiate the model with the given class for the phoneNumberVerification');
    }
}