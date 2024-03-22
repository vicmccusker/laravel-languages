<?php

use App\Http\Middleware\LanguageValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/languages', [\App\Http\Controllers\LanguageController::class, 'get']);
Route::get('/languages/{id}', [\App\Http\Controllers\LanguageController::class, 'find']);
Route::post('/languages', [\App\Http\Controllers\LanguageController::class, 'create'])->middleware(LanguageValidator::class);
Route::put('/languages/{id}', [\App\Http\Controllers\LanguageController::class, 'update']);

Route::get('/difficulties', [\App\Http\Controllers\DifficultyController::class, 'get']);
Route::get('/continents', [\App\Http\Controllers\ContinentController::class, 'get']);
Route::get('/friends', [\App\Http\Controllers\FriendController::class, 'get']);
