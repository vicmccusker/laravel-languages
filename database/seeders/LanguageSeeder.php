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
                'background_image_link' => 'https://i.ibb.co/pxJrYyJ/Untitled-2-01.png',
                'description' => 'Over 2 billion people speak English as a first or second language, it means one out of 4 people can speak English! It makes English the largest language by the number of speakers, and the third largest language by the number of native speakers.',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'French',
                'greeting' => 'Bonjour',
                'background_image_link' => 'https://i.ibb.co/JRZpXQz/Untitled-2-03.png',
                'description' => 'French Language',
                'difficulty_id' => '1',
                'continent_id' => '6',
            ],
            [
                'name' => 'Japanese',
                'greeting' => 'Konnichiwa',
                'background_image_link' => 'https://i.ibb.co/gJrTQ1V/Artboard-1.png',
                'description' => 'Japanese Language',
                'difficulty_id' => '3',
                'continent_id' => '1',
            ],
            [
                'name' => 'Portuguese',
                'greeting' => 'Olá',
                'background_image_link' => 'https://i.ibb.co/gJrTQ1V/Artboard-1.png',
                'description' => 'Portuguese Language',
                'difficulty_id' => '2',
                'continent_id' => '6',
            ],
            [
                'name' => 'Spanish',
                'greeting' => 'Hola',
                'background_image_link' => 'https://i.ibb.co/8zQnv04/Untitled-2-02.png',
                'description' => 'Spanish Language',
                'difficulty_id' => '1',
                'continent_id' => '4',
            ],
            [
                'name' => 'Mandarin',
                'greeting' => 'Nǐ hǎo',
                'background_image_link' => 'https://i.ibb.co/gJrTQ1V/Artboard-1.png',
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
