<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_new_user_and_is_login_is_successful()
    {
        //$this->withoutExceptionHandling();

        $user = User::factory()->create();

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
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
        $this->assertTrue(Auth::attempt([
            'email' => $user->email,
            'password' => 'password'
        ]));
    }

    public function test_user_name_email_update_and_is_login_is_successful()
    {
        //$this->withoutExceptionHandling();

        $user = User::factory()->create();
        $user2 = User::factory()->create();
        $newData = [
            'name' => 'New name',
            'email' => 'new@email.com'
        ];

        // should redirect to login page
        $response = $this->put(route('user.update', $user2), $newData);
        $response->assertStatus(302);
        $response->assertRedirect('login');

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $this->actingAs($user)->put(route('user.update', $user2), $newData);
        $this->assertDatabaseHas('users', $newData);

        // Check if the user is still able to log in - password unchanged
        $this->assertTrue(Auth::attempt([
            'email' => 'new@email.com',
            'password' => 'password'
        ]));
    }
}
