<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Server>
 */
class ServerFactory extends Factory
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
            'enabled_bot' => $this->faker->boolean,
            'role_admin_id' => $this->faker->numberBetween(100000000,1000000000),
            'role_results_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'channel_logs_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'reaction_correct_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'reaction_incorrect_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'reaction_waitlist_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'reaction_banned_id' => strval($this->faker->numberBetween(100000000,1000000000)),
        ];


    }
}
