<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function getPopular()
    {

        return response()->json([
            'message' => 'languages returned',
            'data' => Language::withCount(['friends'])->orderBy('friends_count', 'desc')->take(3)->get(),
        ]);

    }

    public function get()
    {

        return response()->json([
            'message' => 'languages returned',
            'data' => Language::with(['difficulty:id,name,difficulty_image', 'continent:id,name'])->withCount(['friends'])->orderBy('friends_count', 'desc')->get(),
        ]);

    }

    public function find(int $id)
    {
        $language = Language::with(['difficulty:id,name,difficulty_image', 'continent:id,name'])->join('continents', 'continents.id', '=', 'continent_id')->withCount(['friends'])->orderBy('friends_count', 'desc')->find($id);

        if (! $language) {

            return response()->json([
                'message' => 'language not found']);
        }

        return response()->json([
            'message' => 'language found',
            'data' => $language,
        ]);
    }

    public function create(Request $request)
    {
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

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string',
            'spoken_by' => 'required|integer',
            'difficulty_id' => 'required|integer|exists:difficulties,id',
            'continent_id' => 'required|integer|exists:continents,id',
        ]);

        $language = Language::find($id);

        $language->name = $request->name;
        $language->description = $request->description;
        $language->spoken_by = $request->spoken_by;
        $language->difficulty_id = $request->difficulty_id;
        $language->continent_id = $request->continent_id;

        if (! $language) {

            return response()->json([
                'message' => 'language doesnt exist',
            ]);
        }

        if (! $language->save()) {

            return response()->json([
                'message' => 'language not updated',
            ]);
        }

        return response()->json([
            'message' => 'updated',
        ]);
    }
}
