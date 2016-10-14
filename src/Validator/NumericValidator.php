<?php

namespace RobPhilp\Validator;

class NumericValidator implements ValidatorInterface
{
    public static function create()
    {
        return new self();
    }

    public function isValid($value)
    {
        return is_numeric($value);
    }
}
