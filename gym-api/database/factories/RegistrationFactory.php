<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
use App\Models\Training;
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab

/**
 * @extends Factory<Registration>
 */
<<<<<<< HEAD
=======

>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            //
=======
            'member_name' => fake()->name(),
            'email' => fake()->email(),
            'persons' => fake()->numberBetween(1,3),
            ///később kivenni
            'training_id' => Training::factory()
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
        ];
    }
}
