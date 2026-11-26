<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Training;

/**
 * @extends Factory<Registration>
 */

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
            'member_name' => fake()->name(),
            'email' => fake()->email(),
            'persons' => fake()->numberBetween(1,3),
            ///később kivenni
            'training_id' => Training::factory()
        ];
    }
}
