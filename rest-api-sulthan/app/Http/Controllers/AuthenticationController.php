<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        // pengecekan login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // mengecek email yang di inputkan ada atau tidak
        $user = User::where('email', $request->email)->first();

        // mengecek apakah data benar
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['data salah.'],
            ]);
        }

        // mengembalikan token user
        return $user->createToken('user token login')->plainTextToken;
    }

    //fitur logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }

    // json  response
    public function me(Request $request)
    {
        // $user = Auth::user();
        // $post = Post::where('user', $user->id);
        return response()->json(Auth::user());
    }
}
