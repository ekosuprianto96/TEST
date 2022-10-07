<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|unique:users|max:100|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255'
        ]);
        $passCrypt = bcrypt($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return view('login', [
            'user' => $request->email
        ]);
        // return redirect()->back();
    }
}
