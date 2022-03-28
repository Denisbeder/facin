<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'state' => 'draft',
            'slug' => str()->slug(''),
            'title' => $this->faker->sentence(),
            'short_title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'body' => [],
            'published_at' => null,
            'deleted_at' => null,
        ];
    }
}
