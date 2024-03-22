<?php

namespace App\Http\Controllers;

use App\Models\Language;

class LanguageController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'languages returned',
            'data' => Language::with(['difficulty:id,name', 'continent:id,name', 'friends:id,name,email'])->get(),
        ]);

    }

    public function find(int $id)
    {
        $language = Language::with(['difficulty:id,name', 'continent:id,name', 'friends:id,name,email'])->find($id);

            if (!$language) {

                return response()->json([
                    'message' => 'language not found']);
            }

        return response()->json([
            'message' => 'language found',
            'data' => Language::with(['difficulty:id,name', 'continent:id,name', 'friends:id,name,email'])->find($id)
        ]);
    }
}
