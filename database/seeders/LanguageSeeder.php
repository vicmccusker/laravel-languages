<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Difficulty;
use App\Models\Friend;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Language::factory()
                ->recycle(Difficulty::factory()->create())
                ->recycle(Continent::factory()->create())
                ->hasAttached(Friend::factory()->count(2)->create())
                ->count(1)
                ->create();
        }
    }
}
