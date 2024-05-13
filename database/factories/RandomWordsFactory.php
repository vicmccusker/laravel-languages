<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Difficulty;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RandomWord>
 */
class RandomWordsFactory extends Factory
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
        ];
    }
}
