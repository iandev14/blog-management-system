@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="px-28 py-10">
        <h1 class="text-3xl font-bold mb-6">Create New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title Input -->
            <x-input id="title" label="Title" type="text" name="title" placeholder="Enter the post title" />

            <!-- Content Textarea -->
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" rows="6"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                    placeholder="Enter the post content"></textarea>
            </div>

             <!-- Select Category -->
            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500">
                    <option value="" disabled selected>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Image Input -->
            <x-input id="image" label="Image" type="file" name="image" placeholder="Upload an image" />

            <!-- Submit Button -->
            <x-button>
                Create Post
            </x-button>
        </form>
    </div>
@endsection
