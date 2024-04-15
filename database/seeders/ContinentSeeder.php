<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toInsert = [
            [
                'name' => 'Asia',
            ],
            [
                'name' => 'Africa',
            ],
            [
                'name' => 'North America',
            ],
            [
                'name' => 'South America',
            ],
            [
                'name' => 'Antarctica',
            ],
            [
                'name' => 'Europe',
            ],

            [
                'name' => 'Oceania',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('continents')->insert($item);
        }
    }
}
