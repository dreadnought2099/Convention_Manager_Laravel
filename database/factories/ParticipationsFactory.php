<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Conventions;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participations>
 */
class ParticipationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'convention_id' => Conventions::factory(),
            'type' => $this->faker->randomElement(['attendee', 'organizer', 'speaker']),
            'remarks' => $this->faker->sentence(10),
        ];
    }
}
