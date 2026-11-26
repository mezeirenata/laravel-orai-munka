<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\Registration;
use App\Models\Training;
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        //
=======
        // $trainings = Training::all();
        // for($i = 0; $i < 10; $i++){

        //     $registration = Registration::factory()->create();
        //     $registration->attach($trainings->random())
        // }
        // $def_registration = Registration::factory()->create([

        // ]);

        Registration::factory(30)->recycle(Training::all())->create();
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
    }
}
