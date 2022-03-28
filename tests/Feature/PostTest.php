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

    /**
     * Create posts table
     *
     * @test
    */
    public function create_posts_table()
    {
        $this->assertTrue(
            Schema::hasTable('posts')
        );
    }

    /**
     * @test
     */
    public function create_columns()
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
     * @test
     */
    public function create_foreign_key_and_index()
    {
        $constrain = collect(DB::select("PRAGMA index_list(posts)"));
        $indexUserId = $constrain->where('name', '=', 'posts_user_id_index')->first();
        $indexStateSlug = $constrain->where('name', '=', 'posts_state_slug_index')->first();

        $this->assertNotNull($indexUserId);
        $this->assertNotNull($indexStateSlug);
    }

    /**
     * Create Post Model
     *
     * @test
     */
    public function create_a_model()
    {
        $this->assertTrue(class_exists('App\Models\Post'));
    }

    /**
     * Create relationships between User and Post
     *
     * @test
     */
    public function relationship_with_the_user()
    {
        $post = new \App\Models\Post();
        $relationship = $post->user();

        $this->assertEquals(BelongsTo::class, get_class($relationship), 'posts->user()');

        $post     = new \App\Models\User();
        $relationship = $post->posts();

        $this->assertEquals(HasMany::class, get_class($relationship), 'user->posts()');
    }

    /**
     * Create factories for User and DailyLog
     *
     * @test
     */
    public function create_factories()
    {
        $user = \App\Models\User::factory()->create();
        \App\Models\Post::factory()->create(['user_id' => $user->id]);

        $this->assertCount(1, \App\Models\Post::all());
    }

    /**
     * Create route
     *
     * @test
     */
    public function create_route()
    {
        $user = \App\Models\User::factory()->create();

        $this->actingAs($user)
            ->post(route('post.store'), [
                'state' => 'draft',
                'slug' => 'test-1',
                'title' => 'Test 1',
                'short_title' => 'Test short',
                'description' => 'Lorem ipsum',
                'body' => [],
            ]);

        $this->assertDatabaseHas('posts', [
            'user_id' => $user->id,
            'state' => 'draft',
            'slug' => 'test-1',
            'title' => 'Test 1',
            'short_title' => 'Test short',
            'description' => 'Lorem ipsum',
            'body' => json_encode([]),
        ]);
    }
}
