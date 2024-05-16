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
                'difficulty_image' => 'https://jmp.sh/s/qWOwgfgPfr9G9ZsEUTqT',
            ],
            [
                'name' => 'Mid',
                'difficulty_image' => 'https://jmp.sh/s/YTf4JE3pXkcFRPUpyqZ1',
            ],
            [
                'name' => 'Hard',
                'difficulty_image' => 'https://svgshare.com/s/169c'
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('difficulties')->insert($item);
        }
    }
}
