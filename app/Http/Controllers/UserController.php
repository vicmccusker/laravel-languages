<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if (!$user->save()) {

            return response()->json([
                'message' => 'not saved',
            ], 422);
        }

        return response()->json([
            'message' => 'Thank you, you have been registered',
        ], 200);
    }
}
