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
                'greeting' => 'Hello',
                'background_image_link' => 'https://i.ibb.co/dBgmk6p/Untitled-2-01.png',
                'description' => 'Over 2 billion people speak English as a first or second language, it means one out of 4 people can speak English! It makes English the largest language by the number of speakers, and the third largest language by the number of native speakers.',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'French',
                'greeting' => 'Bonjour',
                'background_image_link' => 'https://i.ibb.co/P49Cwzh/Untitled-2-03.png',
                'description' => 'French Language',
                'difficulty_id' => '1',
                'continent_id' => '6',
            ],
            [
                'name' => 'Japanese',
                'greeting' => 'Konnichiwa',
                'background_image_link' => 'https://i.ibb.co/Sn8QX6B/Untitled-2-04.png',
                'description' => 'Japanese is spoken by 125 million people, mainly in Japan, and nearly 4 million people are studying Japanese as a foreign language worldwide.',
                'difficulty_id' => '3',
                'continent_id' => '1',
            ],
            [
                'name' => 'Portuguese',
                'greeting' => 'Olá',
                'background_image_link' => 'https://i.ibb.co/P4SdJfX/Untitled-2-05.png',
                'description' => 'Portuguese is the 6th most spoken language in the world. Portuguese has around 215 million native speakers. It is the most spoken language in South America and the 2nd most spoken language in Latin America.',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'Spanish',
                'greeting' => 'Hola',
                'background_image_link' => 'https://i.ibb.co/Tq1kpc2/Untitled-2-06.png',
                'description' => 'Spanish is the mother tongue of an estimated 400 million people, making it the world’s second most spoken language.',
                'difficulty_id' => '1',
                'continent_id' => '4',
            ],
            [
                'name' => 'Mandarin',
                'greeting' => 'Nǐ hǎo',
                'background_image_link' => 'https://i.ibb.co/SwnZ82x/Untitled-2-06.png',
                'description' => 'Approximately 1.118 billion people speak Mandarin Chinese worldwide. It is the official language of Mainland China, Taiwan, and Singapore.',
                'difficulty_id' => '3',
                'continent_id' => '1',
            ],

        ];

        foreach ($toInsert as $item) {
            DB::table('languages')->insert($item);
        }
    }
}
