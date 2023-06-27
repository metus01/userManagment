<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validated =  $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]
        );
        $user =  User::create($validated);
        return response()->json(
            [
                'success' => true,
                'user' => $user
            ]
        );
    }
}
