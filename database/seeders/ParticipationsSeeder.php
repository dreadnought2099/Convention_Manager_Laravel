<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participations;

class ParticipationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participations::factory()->count(10)->create(); // This will seed 10 participations
    }
}
