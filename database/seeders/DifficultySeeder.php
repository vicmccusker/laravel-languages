<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ],
            [
                'name' => 'Medium',
            ],
            [
                'name' => 'Hard',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('difficulties')->insert($item);
        }
    }
}
