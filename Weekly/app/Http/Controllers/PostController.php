<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->paginate(10);

        $posts = Post::with('category', 'user')->get();
        $categories = Category::All();
        return view('Admin.post.index', compact('posts','categories'));    
    }

    public function create()
    {
        // $posts = Post::with('category', 'user')->get();
        // $categories = Category::all();
        // return view('Admin.post.index', compact('posts','categories'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required',
        'prix' => 'nullable|numeric',
        'image' => 'nullable|image|max:2048',
        'categorie_id' => 'required|exists:categories,id',
        'status' => 'required|in:actif,brouillon,archivé',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('posts', 'public');
    }

    $validated['user_id'] = auth()->id();

    Post::create($validated);

    return redirect()->back()->with('success', 'Post created successfully.');
}


    public function show(Post $post)
    {
        return view('PostsDetails', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::All();
        return view('Admin.post.update', compact('post','categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required',
            'prix' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
            'categorie_id' => 'required|exists:categories,id',
            'status' => 'required|in:actif,brouillon,archivé',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $validated['image'] = $request->file('image')->store('posts', 'public');
        } 
        $validated['user_id'] = auth()->id();
        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}

