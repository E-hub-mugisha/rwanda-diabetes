<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Frontend: list all published posts
    public function index()
    {
        $posts = Post::where('status', 'published')->orderBy('published_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    // Frontend: single post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('posts.show', compact('post'));
    }

    // Admin: list all posts
    public function adminIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    // Admin: create form
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    // Admin: store post
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable',
            'tags' => 'nullable|array',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $data['slug'] = Str::slug($data['title']);
        $data['author_id'] = 1;
        // Convert tags string to array
        $validated['tags'] = isset($validated['tags']) ? explode(',', $validated['tags']) : [];


        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully');
    }

    // Admin: edit form
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    // Admin: update post
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $data['slug'] = Str::slug($data['title']);
        $data['tags'] = $request->tags;
        // Convert tags string to array
        $validated['tags'] = isset($validated['tags']) ? explode(',', $validated['tags']) : [];


        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
    }

    // Admin: delete post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully');
    }
}
