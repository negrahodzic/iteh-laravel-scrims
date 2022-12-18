<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'server_id' => $this->faker->word,
            'server_name' => $this->faker->word,
            'scrim_name' => $this->faker->word,
            'date_played' => $this->faker->date
        ];
    }
}
