<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;

class DifficultyController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'difficulties returned',
            'data' => Difficulty::with(['language:name,difficulty_id'])->get()->makeHidden(['created_at', 'updated_at']),
        ]);

    }
}
