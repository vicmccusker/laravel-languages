<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'language_id' => '1',
                'friend_id' => '2',
            ],
            [
                'language_id' => '2',
                'friend_id' => '3',
            ],
            [
                'language_id' => '3',
                'friend_id' => '1',
            ],
            [
                'language_id' => '4',
                'friend_id' => '4',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('friend_language')->insert($item);
        }
    }
}
