<?php

use RobPhilp\Validator\ArrayHasValueValidator;

class ArrayHasValueValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertValidArrayValues()
    {
        $validator = ArrayHasValueValidator::create([
            'name'      => 'Rob',
            'age'       => 36,
            'home'      => 'London'
        ]);

        $this->assertTrue($validator->isValid('Rob'));
        $this->assertTrue($validator->isValid('36'));
        $this->assertTrue($validator->isValid('London'));

        $this->assertFalse($validator->isValid('invalid'));
        $this->assertFalse($validator->isValid(123));
    }
}
