<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scrim>
 */
class ScrimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'scrim_name' => $this->faker->word,
            'enabled_scrim' => $this->faker->boolean,
            'number_of_teams' => $this->faker->numberBetween(0,25),
            'max_number_of_teams' => $this->faker->numberBetween(0,25),
            'number_first_slot' => $this->faker->numberBetween(1,5),
            'number_of_vip_slots' => $this->faker->numberBetween(0,25),
            'activate_remove_unconfirmed' => $this->faker->boolean,
            'activate_results' => $this->faker->boolean,
            'channel_registrations_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'channel_confirmations_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'channel_idpw_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'channel_waitlist_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'channel_chat_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'role_registrations_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'roles_vip_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'role_waitlist_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'role_banned_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_early_regs' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_open_regs' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_lock_regs' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_open_waitlist' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_lock_waitlist' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_confirmation' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_slots' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_free_slots' => strval($this->faker->numberBetween(100000000,1000000000)),
            'text_dm_confirmation' => strval($this->faker->numberBetween(100000000,1000000000)),
            'msg_waitlist_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'msg_slots_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'msg_confirmation_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'role_idpw_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'msg_idpw_id' => strval($this->faker->numberBetween(100000000,1000000000)),
            'server_id' => $this->faker->numberBetween(1,5),

        ];
    }
}
