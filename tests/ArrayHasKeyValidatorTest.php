<?php

use RobPhilp\Validator\ArrayHasKeyValidator;

class ArrayHasKeyValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertValidArrayKeys()
    {
        $validator = ArrayHasKeyValidator::create([
            'name'      => 'Rob',
            'age'       => 36,
            'home'      => 'London'
        ]);

        $this->assertTrue($validator->isValid('name'));
        $this->assertTrue($validator->isValid('age'));
        $this->assertTrue($validator->isValid('home'));

        $this->assertFalse($validator->isValid('invalid'));
        $this->assertFalse($validator->isValid(0));
    }
}
