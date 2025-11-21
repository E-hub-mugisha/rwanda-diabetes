<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::latest()->paginate(10);
        return view('admin.stories.index', compact('stories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'author_name' => 'nullable|string|max:255',
            'location'    => 'nullable|string|max:255',
            'excerpt'     => 'nullable|string',
            'content'     => 'required',
            'type'        => 'required|in:story,testimony',
            'featured_image' => 'nullable|image|max:2048',
            'status'      => 'required|in:draft,published',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')
                                ->store('stories', 'public');
        }

        $validated['created_by'] = auth()->id();
        $validated['published_at'] = $validated['status'] === 'published' ? now() : null;

        Story::create($validated);

        return back()->with('success', 'Story/Testimony created successfully.');
    }

    public function update(Request $request, Story $story)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'author_name' => 'nullable|string|max:255',
            'location'    => 'nullable|string|max:255',
            'excerpt'     => 'nullable|string',
            'content'     => 'required',
            'type'        => 'required|in:story,testimony',
            'featured_image' => 'nullable|image|max:2048',
            'status'      => 'required|in:draft,published',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')
                                ->store('stories', 'public');
        }

        if ($validated['status'] === 'published' && !$story->published_at) {
            $validated['published_at'] = now();
        }

        $story->update($validated);

        return back()->with('success', 'Story/Testimony updated.');
    }

    public function destroy(Story $story)
    {
        $story->delete();
        return back()->with('success', 'Story/Testimony deleted.');
    }
}
