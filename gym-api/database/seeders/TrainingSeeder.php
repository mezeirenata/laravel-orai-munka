<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Training;
=======
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // Training::query()->delete();

        Training::factory()->count(17)->create();

        Training::factory()->count(3)->state(['free_spots' => 0,])->create();
        Training::factory()->count(2)->state(['starts_at' => now()->subDay()->setTime(18, 30)])->create();

=======
        //
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
    }
}
