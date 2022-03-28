<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_posts_table()
    {
        $this->assertTrue(
            Schema::hasTable('posts')
        );
    }

    public function teste_create_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('posts', [
                'id',
                'user_id',
                'state',
                'slug',
                'title',
                'short_title',
                'description',
                'body',
                'published_at',
                'created_at',
                'updated_at',
                'deleted_at',
            ])
        );
    }

    /**
     * Create a foreign key that will connect user_id with users table.
     * Make sure to create an index for this column.
     *
     * @return void
     */
    public function test_create_foreign_key_and_index()
    {
        $constrain = collect(DB::select("PRAGMA index_list(posts)"));
        $indexUserId = $constrain->where('name', '=', 'posts_user_id_index')->first();
        $indexStateSlug = $constrain->where('name', '=', 'posts_state_slug_index')->first();

        $this->assertNotNull($indexUserId);
        $this->assertNotNull($indexStateSlug);
    }

    public function test_create_a_model()
    {
        $this->assertTrue(class_exists('App\Models\Post'));
    }

    public function test_relationship_with_the_user()
    {
        $post = new \App\Models\Post();
        $relationship = $post->user();

        $this->assertEquals(BelongsTo::class, get_class($relationship), 'posts->user()');

        $post     = new \App\Models\User();
        $relationship = $post->posts();

        $this->assertEquals(HasMany::class, get_class($relationship), 'user->posts()');
    }

    public function test_create_factories()
    {
        $user = \App\Models\User::factory()->create();
        \App\Models\Post::factory()->create(['user_id' => $user->id]);

        $this->assertCount(1, \App\Models\Post::all());
    }

    public function test_create_route()
    {
        $user = \App\Models\User::factory()->create();

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

    public function test_profile_routes_are_protected_from_public()
    {
        $response = $this->get(route('app.index'));
        $response->assertStatus(302);
        $response->assertRedirect('dashboard');

        $response = $this->get(route('dashboard'));
        $response->assertStatus(302);
        $response->assertRedirect('login');

        $response = $this->post(route('post.store'));
        $response->assertStatus(302);
        $response->assertRedirect('login');

        $user = \App\Models\User::factory()->create();
        $response = $this->actingAs($user)->get(route('post.index'));
        $response->assertOk();
    }
}
