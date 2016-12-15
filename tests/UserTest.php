<?php

use Edujugon\Eloquent\Models\User;

class UserTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function retrieve_all_users()
    {
        dd(User::all());
    }

}