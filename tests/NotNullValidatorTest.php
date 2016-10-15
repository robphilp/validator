<?php

use RobPhilp\Validator\NotNullValidator;

class NotNullValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertNullIsNull()
    {
        $valid = NotNullValidator::create()->isValid(null);

        $this->assertFalse($valid);

    }

    /**
     * @test
     */
    public function assertStringIsNotNull()
    {
        $valid = NotNullValidator::create()->isValid('hello');

        $this->assertTrue($valid);

    }
}
