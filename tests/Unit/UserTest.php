<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function testUserCreation()
    {
        // Create a new user
        $user = User::create(['name' => 'John Doe', 'email' => 'johndoe@example.com', 'password' => 'password']);

        // Assert that the user was created successfully
        $this->assertTrue($user->exists());
    }
}