<?php

use RobPhilp\Validator\ArrayKeyNotEmptyValidator;

class ArrayKeyNotEmptyValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assertNonEmptyArrayValues()
    {
        $validator = ArrayKeyNotEmptyValidator::create([
            'name'      => 'Rob',
            'age'       => 36,
            'home'      => 'London',
            'empty'     => '',
            'null'      => null
        ]);

        $this->assertTrue($validator->isValid('name'));
        $this->assertTrue($validator->isValid('age'));
        $this->assertTrue($validator->isValid('home'));

        $this->assertFalse($validator->isValid('empty'));
        $this->assertFalse($validator->isValid('null'));
        $this->assertFalse($validator->isValid('does_not_exist'));
    }
}
