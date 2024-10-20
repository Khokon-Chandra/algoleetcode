<?php

namespace Database\Factories;

use App\Models\DiscussionType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(10),
            'user_id' => User::inRandomOrder()->first()->id,
            'discussion_type_id' => DiscussionType::inRandomOrder()->first()->id,
            'description' => fake()->paragraph(10),
            'vote' => rand(1, 5000),
        ];
    }
}
