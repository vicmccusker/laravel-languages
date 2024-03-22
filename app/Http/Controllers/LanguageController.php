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

        if (! $language) {

            return response()->json([
                'message' => 'language not found']);
        }

        return response()->json([
            'message' => 'language found',
            'data' => $language,
        ]);
    }

    public function create(\Illuminate\Http\Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string',
            'spoken_by' => 'required|integer',
            'difficulty_id' => 'required|integer|exists:difficulties,id',
            'continent_id' => 'required|integer|exists:continents,id',
            'friends_ids' => 'array',
            'friends_ids.*' => 'integer|exists:friends,id',
        ]);

        $language = new Language();
        $language->name = $request->name;
        $language->description = $request->description;
        $language->spoken_by = $request->spoken_by;
        $language->difficulty_id = $request->difficulty_id;
        $language->continent_id = $request->continent_id;

        $save = $language->save();

        $language->friends()->attach($request->friends_ids);

        if (! $save) {

            return response()->json([
                'message' => 'not saved',
            ]);
        }

        return response()->json([
            'message' => 'saved',
        ]);
    }
}
