<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Training::query()->delete();

        Training::factory()->count(17)->create();

        Training::factory()->count(3)->state(['free_spots' => 0,])->create();
        Training::factory()->count(2)->state(['starts_at' => now()->subDay()->setTime(18, 30)])->create();

    }
}
