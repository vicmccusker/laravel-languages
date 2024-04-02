<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'name' => 'English',
                'description' => 'English Language',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'French',
                'description' => 'French Language',
                'difficulty_id' => '1',
                'continent_id' => '6',
            ],
            [
                'name' => 'Japanese',
                'description' => 'Japanese Language',
                'difficulty_id' => '3',
                'continent_id' => '1',
            ],
            [
                'name' => 'Portuguese',
                'description' => 'Portuguese Language',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'Spanish',
                'description' => 'Spanish Language',
                'difficulty_id' => '1',
                'continent_id' => '4',
            ],
            [
                'name' => 'Mandarin',
                'description' => 'Mandarin Language',
                'difficulty_id' => '3',
                'continent_id' => '1',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('languages')->insert($item);
        }
    }
}
