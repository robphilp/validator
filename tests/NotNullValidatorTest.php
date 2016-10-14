<?php

use RobPhilp\Validator\NotNullValidator;

/**
 * Created by PhpStorm.
 * User: robertphilp
 * Date: 14/10/2016
 * Time: 20:44
 */
class NotNullValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertNullIsNull()
    {
        $validator = new NotNullValidator();
        $valid = $validator->isValid(null);
        
        $this->assertFalse($valid);

    }
}
