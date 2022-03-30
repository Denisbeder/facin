<?php

namespace Tests\Feature\Post;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MigrationPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_table()
    {
        $this->assertTrue(
            Schema::hasTable('posts')
        );
    }

    public function test_create_columns()
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
}
