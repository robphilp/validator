<?php

namespace RobPhilp\Validator;

interface ValidatorInterface
{
    /**
     * @param $value
     * 
     * @return mixed
     */
    function isValid($value);
}