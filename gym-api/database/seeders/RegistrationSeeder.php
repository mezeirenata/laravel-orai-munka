<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;
use App\Models\Training;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $trainings = Training::all();
        // for($i = 0; $i < 10; $i++){

        //     $registration = Registration::factory()->create();
        //     $registration->attach($trainings->random())
        // }
        // $def_registration = Registration::factory()->create([

        // ]);

        Registration::factory(30)->recycle(Training::all())->create();
    }
}
