<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
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
}
