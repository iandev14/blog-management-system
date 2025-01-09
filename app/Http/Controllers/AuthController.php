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

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password'))) {
            // Redirect based on role
            $role = auth()->user()->role;
            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.dashboard')->with('success', 'Welcome to the Admin Dashboard!');
                case 'author':
                    return redirect()->route('posts.index')->with('success', 'Welcome, Author!');
                case 'viewer':
                    return redirect()->route('posts.index')->with('success', 'Welcome, Viewer!');
                default:
                    return redirect()->route('welcome')->with('error', 'Invalid role.');
            }
        }

        // If authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
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

        // Create user with default role
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'viewer', // Default role
        ]);

        // Redirect to login page
        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('welcome')->with('success', 'Logged out successfully.');
    }
}
