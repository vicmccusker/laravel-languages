<?php

namespace App\Http\Controllers;

use App\Models\Continent;

class ContinentController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'continents returned',
            'data' => Continent::with(['language:id,name'])->get(),
        ]);
    }
}
