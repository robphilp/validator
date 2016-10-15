<?php

namespace RobPhilp\Validator;

class ArrayKeyNotEmptyValidator implements ValidatorInterface
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

    public function isValid($key)
    {
        return array_key_exists($key, $this->array) &&
            !empty($this->array[$key]) &&
            !is_null($this->array[$key]);
    }
}
