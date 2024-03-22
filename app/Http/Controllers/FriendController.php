<?php

namespace App\Http\Controllers;

use App\Models\Friend;

class FriendController extends Controller
{
    public function get()
    {

        return response()->json([
            'message' => 'languages returned',
            'data' => Friend::with(['languages:name'])->get(),
        ]);

    }
}
