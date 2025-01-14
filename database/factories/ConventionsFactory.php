<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conventions;

class ConventionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), 
            'start' => $this->faker->dateTimeBetween('now', '+1 month'), 
            'end' => $this->faker->dateTimeBetween('+1 month', '+2 months'), 
            'venue' => $this->faker->address, 
            'fee' => $this->faker->numberBetween(100, 5000), 
            'remarks' => $this->faker->paragraph,
        ];
    }
}
