<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hours = [17, 18, 19, 20, 21];
        $minutes = [0, 15, 30, 45];

        return [
            'name' => fake()->randomElement([
                'Yoga',
                'Pilates',
                'Spinning',
                'Body Pump',
                'CrossFit',
                'Zumba',
                'Boxing',
                'HIIT',
                'Strength Training',
                'Mobility',
            ]),
            'trainer' => fake()->randomElement([
                'Kovács Anna',
                'Nagy Péter',
                'Tóth Eszter',
                'Szabó Márk',
                'Varga Júlia',
            ]),
            'starts_at' => now()->addDays(rand(1, 14))->setTime(fake()->randomElement($hours), fake()->randomElement($minutes)),
            'duration' => fake()->randomElement([45, 60, 90]),
            'price' => fake()->randomElement([1500, 2000, 2500, 3000]),
            'free_spots' => fake()->numberBetween(1, 20)
        ];
    }
}
