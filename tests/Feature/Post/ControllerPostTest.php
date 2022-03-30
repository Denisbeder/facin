<?php

namespace Tests\Feature\Post;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
