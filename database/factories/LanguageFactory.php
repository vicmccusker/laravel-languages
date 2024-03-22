<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Difficulty;
use App\Models\Friend;
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
            'description' => $this->faker->paragraph(2),
            'spoken-by' => Friend::factory(),
            'difficulty_id' => Difficulty::factory(),
            'continents_id' => Continent::factory(),
        ];
    }
}
