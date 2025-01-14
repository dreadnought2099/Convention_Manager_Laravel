<?php

namespace Database\Seeders;

use Database\Factories\PersonalInfoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalInfoFactory::factory()->count(10)->create();
    }
}
