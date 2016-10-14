<?php

namespace RobPhilp\Validator;

class ArrayHasValueValidator implements ValidatorInterface
{
    private $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    public static function create($array)
    {
        return new self($array);
    }

    public function isValid($value)
    {
        return in_array($value, $this->array);
    }
}
