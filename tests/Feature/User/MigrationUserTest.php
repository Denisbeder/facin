<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MigrationUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_table()
    {
        $this->assertTrue(
            Schema::hasTable('users')
        );
    }

    public function test_create_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('users', [
                'id',
                'name',
                'email',
                'email_verified_at',
                'remember_token',
                'password',
                'created_at',
                'updated_at',
                'deleted_at',
            ])
        );
    }
}
