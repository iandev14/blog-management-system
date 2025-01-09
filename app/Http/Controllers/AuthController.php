<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // returns login.blade.php in the resources/views/auth directory
    }

    public function showRegisterForm()
    {
        return view('auth.register'); // returns register.blade.php in the resources/views/auth directory
    }

    public function register(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create user
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to login page
        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }
}
