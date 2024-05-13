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
                'description' => 'Hello',
                'language_id' => '5',
            ],

            [
                'word' => 'Bonjour',
                'description' => 'Hello',
                'language_id' => '2',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('random_words')->insert($item);
        }
    }
}
