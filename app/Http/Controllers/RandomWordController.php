<?php

namespace App\Http\Controllers;

use App\Models\RandomWords;

class RandomWordController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'returned',
            'data' => RandomWords::with(['language:id,name'])->get(),
        ]);

    }
}
