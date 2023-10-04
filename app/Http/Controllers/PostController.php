<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /// For pagination
$posts = Post::paginate(10);

// For searching
$search = request('search');
$posts = Post::where('title', 'like', "%$search%")
    ->orWhere('content', 'like', "%$search%")
    ->paginate(10);

    }



public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|max:1024', // 1MB limit
    ]);

    if ($validator->fails()) {
        return redirect()->route('posts.create')
            ->withErrors($validator)
            ->withInput();
    }

    // Create and save the post here

    return redirect()->route('posts.index')
        ->with('success', 'Post created successfully.');
}

public function update(Request $request, Post $post)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|max:1024', // 1MB limit
    ]);

    if ($validator->fails()) {
        return redirect()->route('posts.edit', $post->id)
            ->withErrors($validator)
            ->withInput();
    }

    // Update the post here

    return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.');
}


   
}
