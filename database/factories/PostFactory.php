<?php

namespace Database\Factories;

use App\Enums\PostState;
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
        $title = $this->faker->sentence();
        return [
            'user_id' => User::factory(),
            'state' => PostState::DRAFT,
            'slug' => str()->slug($title),
            'title' => $title,
            'short_title' => str()->of($title)->words(4, null),
            'description' => $this->faker->text(),
            'body' => [],
            'posted_at' => null,
            'deleted_at' => null,
        ];
    }
}
