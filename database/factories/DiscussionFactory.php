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
            'user_id' => User::inRandomOrder()->first()->id,
            'discussion_type_id' => DiscussionType::inRandomOrder()->first()->id,
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'vote' => rand(1, 5000),
        ];
    }
}
