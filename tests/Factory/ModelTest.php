<?php

namespace Tests\Factory;

use PHPUnit_Framework_TestCase;
use EasyCrud\Models\User;
use EasyCrud\Models\Account;
use EasyCrud\Factory\Model;

class ModelTest extends PHPUnit_Framework_TestCase
{

    public function classNames()
    {
        return [
            ['EasyCrud-Models-User', User::class],
            ['EasyCrud-Models-Account', Account::class],
        ];
    }
    
    /**
     * @dataProvider classNames
     */
    public function testShouldCreateModelClassBasedOnTheClassName(
        $desiredClass,
        $result
    ) {
        $factory = new Model();
        $this->assertInstanceOf($result, $factory->create($desiredClass));
    }
}
