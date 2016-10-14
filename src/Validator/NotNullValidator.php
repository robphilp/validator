<?php

namespace RobPhilp\Validator;

class NotNullValidator implements ValidatorInterface
{
    public static function create()
    {
        return new self();
    }
    
    public function isValid($value)
    {
        return !is_null($value);
    }
}
