<?php

namespace Tests\Feature\User;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_should_has_soft_deletes_trait()
    {
        $classUses = collect(class_uses(new User()));

        $hasTrait = Arr::exists($classUses, SoftDeletes::class);

        $this->assertTrue($hasTrait, 'This Trait "' . SoftDeletes::class . '" don\'t exists in the model.');
    }
}
