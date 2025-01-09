@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-6">Manage Users</h1>

        <!-- Display Success Message -->
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add New User Form -->
        <h2 class="text-xl font-semibold mb-4">Add New User</h2>
        <form action="{{ route('admin.users.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-medium">Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block font-medium">Password</label>
                <input type="password" name="password" id="password" class="w-full border border-gray-300 p-2 rounded"
                    required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block font-medium">Role</label>
                <select name="role" id="role" class="w-full border border-gray-300 p-2 rounded">
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                    <option value="viewer" selected>Viewer</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Add User
            </button>
        </form>

        <!-- Users List -->
        <h2 class="text-xl font-semibold mb-4">All Users</h2>
        <table class="w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Role</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <!-- Role Update Form -->
                            <form action="{{ route('admin.users.updateRole', $user) }}" method="POST">
                                @csrf
                                <select name="role" class="border border-gray-300 rounded p-1"
                                    onchange="this.form.submit()">
                                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="author" {{ $user->role === 'author' ? 'selected' : '' }}>Author</option>
                                    <option value="viewer" {{ $user->role === 'viewer' ? 'selected' : '' }}>Viewer</option>
                                </select>
                            </form>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <!-- You can add edit/delete functionality if needed -->
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
