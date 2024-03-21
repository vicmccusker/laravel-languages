<?php

namespace App\Http\Controllers;

use App\Models\Language;

class LanguageController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'languages returned',
            'data' => Language::with(['difficulty:id,name', 'continent:id,name', 'friends:id,name'])->get(),
        ]);

    }
}
