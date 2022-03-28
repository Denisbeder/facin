<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_new_user_and_is_login_is_successful()
    {
        //$this->withoutExceptionHandling();

        $user = \App\Models\User::factory()->create();

        $this->actingAs($user)->post(route('user.store'), [
            'name' => 'New name',
            'email' => 'new@email.com',
            'password' => 'password',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'New name',
            'email' => 'new@email.com',
        ]);

        // Check if the user is still able to log in - password unchanged
        $this->assertTrue(\Illuminate\Support\Facades\Auth::attempt([
            'email' => $user->email,
            'password' => 'password'
        ]));
    }
}
