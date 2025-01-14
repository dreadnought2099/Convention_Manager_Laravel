<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalInfoFactory extends Factory
{
    protected $model = \App\Models\PersonalInfo::class; // Explicitly define the model

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Create a related user via factory
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'phone' => $this->faker->numerify('###########'),
        ];
    }
}

