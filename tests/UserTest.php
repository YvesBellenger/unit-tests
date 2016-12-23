<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    function testIfValid()
    {
        $user = User::create('Yves', 'Bellenger', '20', 'contact@yvesbellenger.fr');
        $this->assertTrue($user->isValid());
    }

    function testIfNotValid()
    {
        $user = User::create('Yves', 'Bellenger', '12', 'contact@yvesbellenger.fr');
        $this->assertFalse($user->isValid());
    }
}
