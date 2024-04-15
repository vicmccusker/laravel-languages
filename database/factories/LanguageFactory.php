<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Difficulty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(2),
            'difficulty_id' => Difficulty::factory(),
            'continent_id' => Continent::factory(),
        ];
    }
}
