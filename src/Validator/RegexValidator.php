<?php

namespace RobPhilp\Validator;

class RegexValidator implements ValidatorInterface
{
    private $pattern;

    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    public static function create($pattern)
    {
        return new self($pattern);
    }

    public function isValid($value)
    {
        return preg_match($this->pattern, $value) === 1;
    }
}
