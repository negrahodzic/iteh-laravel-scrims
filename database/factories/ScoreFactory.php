<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rank' => $this->faker->numberBetween(1,20),
            'team_name' => $this->faker->word,
            'team_tag' => $this->faker->word,
            'wwcd' => $this->faker->numberBetween(0,4),
            'placement_points' => $this->faker->numberBetween(0,60),
            'kill_points' => $this->faker->numberBetween(0,70),
            'total_points' => $this->faker->numberBetween(0,120),
            'games_missed' => $this->faker->numberBetween(0,4),
            'result_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
