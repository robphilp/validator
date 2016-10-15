<?php

use RobPhilp\Validator\NumericValidator;

class NumericValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertValidNumericValues()
    {
        $validator = NumericValidator::create();

        $this->assertTrue($validator->isValid(150));
        $this->assertTrue($validator->isValid(1.50));
        $this->assertTrue($validator->isValid(-15.0));
        $this->assertTrue($validator->isValid(0.150));
        $this->assertTrue($validator->isValid('-200'));
    }

    /**
     * @test
     */
    public function assertNonNumericValues()
    {
        $validator = NumericValidator::create();

        $this->assertFalse($validator->isValid('hello world'));
        $this->assertFalse($validator->isValid('abc123'));
        $this->assertFalse($validator->isValid('1.0a'));
        $this->assertFalse($validator->isValid('153,000'));
        $this->assertFalse($validator->isValid(['key' => 'value']));
    }
}
