<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'name' => 'Easy',
                'difficulty_image' => 'https://svgshare.com/i/168k.svg',
            ],
            [
                'name' => 'Mid',
                'difficulty_image' => 'https://svgshare.com/i/1681.svg',
            ],
            [
                'name' => 'Hard',
                'difficulty_image' => 'https://svgshare.com/i/169x.svg',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('difficulties')->insert($item);
        }
    }
}
