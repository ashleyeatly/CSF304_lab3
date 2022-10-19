<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'firstname' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'address' => fake()->address(),
            'date_of_birth' => fake()->date(),
            'current' => fake()->boolean(50),
            'created_at' => fake()->date(),
            'updated_at' => fake()->date(),
        ];
    }
}
