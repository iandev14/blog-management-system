<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Display a list of all users
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.users', compact('users'));
    }

    // Store a new user (Admin creates a new user with a specific role)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:admin,author,viewer', // Restrict allowed roles
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully!');
    }

    // Update the role of an existing user
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,author,viewer',
        ]);

        $user->update(['role' => $request->role]);

        return redirect()->route('admin.users')->with('success', 'User role updated successfully!');
    }
}
