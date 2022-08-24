<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_route_login()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_has_post_route_login_authenticate()
    {
        $response = $this->post(route('login.authenticate'));

        $response->assertStatus(302);
    }

    public function test_has_route_logout()
    {
        $response = $this->get(route('logout'));

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_access_the_index_route_should_be_redirect_to_dashboard()
    {
        $response = $this->get(route('app.index'));
        $response->assertStatus(302);
        $response->assertRedirect('dashboard');
    }

    public function access_dashboard_route_outside_the_app_subdomain_must_be_redirected_to_dashboard_route_in_the_app_subdomain()
    {
        $response = $this->get(route('dashboard'));
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

    public function send_a_post_to_protected_route_should_be_redirected_to_login_route()
    {
        $response = $this->post(route('post.store'));
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

    public function test_authenticated_user_can_access_protected_route()
    {
        $user = User::factory()->create();

        /** @var Authenticatable $user */
        $response = $this->actingAs($user)->get(route('post.index'));
        $response->assertOk();
    }

    public function test_user_can_make_login_and_is_redirected_to_dashboard_route()
    {
        $user = User::factory()->create();

        $response = $this->post(route('login.authenticate'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('dashboard');

        $response = $this->get(route('user.index'));
        $response->assertOk();
    }

    public function test_user_after_logout_should_not_have_access_to_a_protected_route()
    {
        $user = User::factory()->create();

        // make login
        $response = $this->post(route('login.authenticate'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        // user is redirected to dashboard route
        $response->assertStatus(302);
        $response->assertRedirect('dashboard');

        // user go to user.index route
        $response = $this->get(route('user.index'));
        $response->assertOk();

        // user make logout
        $response = $this->get(route('logout'));
        $response->assertStatus(302);

        // after logout of user him try access user.index again and is he has redirected to route of login
        $response = $this->get(route('user.index'));
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }
}
