<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'word' => 'Hola',
                'description' => 'Spanish for Hello',
            ],

            [
                'word' => 'Hello',
                'description' => 'English for Hello',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('random_words')->insert($item);
        }
    }
}
