<?php

namespace Tests\Feature\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Enums\PostState;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_route()
    {
        $user = User::factory()->create();

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $this->actingAs($user)
            ->post(route('post.store'), [
                'state' => 'draft',
                'slug' => 'test-1',
                'title' => 'Test 1',
                'short_title' => 'Test short',
                'description' => 'Lorem ipsum',
                'body' => []
            ]);

        $this->assertDatabaseHas('posts', [
            'user_id' => $user->id,
            'state' => 'draft',
            'slug' => 'test-1',
            'title' => 'Test 1',
            'short_title' => 'Test short',
            'description' => 'Lorem ipsum',
            'body' => json_encode([])
        ]);
    }

    public function test_if_the_delete_route_is_working()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $this->get(route('post.index')); // simule that user unauthenticated navigate to route.index and after click to delete item
        $response = $this->delete(route('post.delete', $post));
        $response->assertStatus(302);
        $response->assertRedirect('login');

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $this->actingAs($user);
        $this->get(route('post.index')); // simule that user navigate to route.index and after click to delete item
        $response = $this->delete(route('post.delete', $post));
        $response->assertStatus(302);
        $response->assertRedirectContains('/post');
    }

    public function test_apply_soft_delete()
    {
        $user = User::factory()->create();

        $post = Post::factory()->create(['user_id' => $user->id]);

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $this->actingAs($user)->delete(route('post.delete', $post));

        $this->assertSoftDeleted('posts', ['id' => $post->id]);
    }
}
