<?php

namespace Tests\Feature;

use App\Models\Friend;
use App\Models\Language;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class LanguageTest extends TestCase
{
    use DatabaseMigrations;

    public function test_getLanguages(): void
    {
        Language::factory()->has(Friend::factory())->create();

        $response = $this->getJson('/api/languages');

        $response->assertStatus(200)
            ->assertJson(function (AssertableJson $json) {
                $json->hasAll(['message', 'data'])
                    ->whereType('message', 'string')
                    ->has('data', function (AssertableJson $json) {
                        $json->hasAll(['id', 'name', 'description', 'difficulty', 'continent', 'friends'])
                            ->whereAllType([
                                'id' => 'integer',
                                'name' => 'string',
                            ])
                            ->has('difficulties', function (AssertableJson $json) {
                                $json->hasAll(['id', 'name'])
                                    ->whereAllType([
                                        'id' => 'integer',
                                        'name' => 'string',
                                    ])
                                    ->has('continents', function (AssertableJson $json) {
                                        $json->hasAll(['id', 'name'])
                                            ->whereAllType([
                                                'id' => 'integer',
                                                'name' => 'string',
                                            ])
                                            ->has('friends', 1, function (AssertableJson $json) {
                                                $json->hasAll(['id', 'name', 'email'])
                                                    ->whereAllType([
                                                        'id' => 'integer',
                                                        'name' => 'string',
                                                        'email' => 'string',
                                                    ]);
                                            });
                                    });
                            });
                    });
            });
    }
}
