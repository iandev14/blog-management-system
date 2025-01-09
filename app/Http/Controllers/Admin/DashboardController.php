<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $totalPosts = Post::count();
        $totalCategories = Category::count();
        $totalUsers = User::count();
        $latestPosts = Post::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPosts', 'totalCategories', 'totalUsers', 'latestPosts'));
    }
}
