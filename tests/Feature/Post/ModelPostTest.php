<?php

namespace Tests\Feature\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ModelPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_a_model()
    {
        $this->assertTrue(class_exists('App\Models\Post'));
    }

    public function test_relationship_with_the_user()
    {
        $post = new Post();
        $relationship = $post->user();

        $this->assertEquals(BelongsTo::class, get_class($relationship), 'posts->user()');

        $post = new User();
        $relationship = $post->posts();

        $this->assertEquals(HasMany::class, get_class($relationship), 'user->posts()');
    }

    public function test_create_factories()
    {
        $user = User::factory()->create();
        Post::factory()->create(['user_id' => $user->id]);

        $this->assertCount(1, Post::all());
    }

    public function test_should_has_soft_deletes_trait()
    {
        $classUses = collect(class_uses(new Post()));

        $hasTrait = Arr::exists($classUses, SoftDeletes::class);

        $this->assertTrue($hasTrait, 'This Trait "' . SoftDeletes::class . '" don\'t exists in the model.');
    }

    public function test_has_observer_class()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();
        $postObserver = $this->mock(\App\Observers\PostObserver::class);
        $postObserver->shouldReceive('updated')->once();

        $post->title = "new title";
        $post->user_id = $user->id;
        $post->save();
    }
}
