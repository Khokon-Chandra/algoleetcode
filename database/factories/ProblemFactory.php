<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**0
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'topic_id'    => Topic::factory()->create()->id,
            'title'       => fake()->sentence(),
            'description' => fake()->paragraph(),
            'difficulty'  => ['easy', 'medium', 'hard'][rand(0, 2)],
            'examples' => [
                [
                    "input" => "num=[1234,234,234,46]; target=9;",
                    "output" => "234"
                ],
                [
                    "input" => "num=[1234,234,234,46]; target=9;",
                    "output" => "234"
                ],
            ],

            'constraints' => [
                ["value" => "10 >= X =< 100"],
                ["value" => "100 >= X =< 1000"],
            ],
        ];
    }
}
