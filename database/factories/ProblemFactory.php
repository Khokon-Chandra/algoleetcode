<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'topic_id'    => Topic::inRandomOrder()->first()->id,
            'title'       => fake()->sentence(),
            'description' => fake()->paragraph(),
            'difficulty'  => ['easy', 'medium', 'hard'][rand(0, 2)]
        ];
    }
}
