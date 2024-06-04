<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence(3),
            'time' => fake()->numberBetween(60,180),
            'fsk' => fake()->randomElement([0, 6, 12, 16, 18]),
            'releasedate' => fake()->date()
        ];
    }
}
