<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\RandomWord;

class RandomWordController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'continents returned',
            'data' => RandomWord::with(['languages:id,name'])->get(),
        ]);
    }
}
