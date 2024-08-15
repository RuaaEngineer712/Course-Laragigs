<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\Tag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence('2'),
            'discreption' => fake()->paragraph(50),
            'tags' => 'laravel, api, backend',
            'company' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),

        ];
    }
}
