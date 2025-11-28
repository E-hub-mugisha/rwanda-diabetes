<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Program;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        $categories = Category::all();

        return view('admin.articles.index', compact('articles', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|string',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        }

        $validated['tags'] = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];

        Article::create($validated + [
            'author_id' => auth()->id(),
            'published_at' => $validated['status'] === 'published' ? now() : null
        ]);

        return back()->with('success', 'Article created successfully.');
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|string',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        }

        $validated['tags'] = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];

        if ($validated['status'] === 'published' && !$article->published_at) {
            $validated['published_at'] = now();
        }

        $article->update($validated);

        return back()->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('success', 'Article deleted.');
    }
    // Admin: Update article status only
    public function updateStatus(Request $request, Article $article)
    {
        $validated = $request->validate([
            'status' => 'required|in:draft,published,archived',
        ]);

        $article->status = $validated['status'];

        // Set published_at if changing to published
        if ($article->status === 'published' && !$article->published_at) {
            $article->published_at = now();
        }

        $article->save();

        return back()->with('success', 'Article status updated successfully.');
    }
    public function show($slug)
    {
        $article = Article::with('category')->where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('admin.articles.show', compact('article','categories'));
    }
}
