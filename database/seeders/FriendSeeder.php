<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'name' => 'Jonny',
                'email' => 'johnny@jonny.com',
            ],
            [
                'name' => 'Liz',
                'email' => 'liz@liz.com',
            ],
            [
                'name' => 'Vic',
                'email' => 'vic@vic.com',
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@alex.com',
            ],
            [
                'name' => 'Steven',
                'email' => 'steven@steven.com',
            ],
            [
                'name' => 'Monica',
                'email' => 'monica@monica.com',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('friends')->insert($item);
        }
    }
}
