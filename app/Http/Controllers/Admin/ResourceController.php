<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResearchCategory;
use App\Models\ResearchItem;
use Illuminate\Http\Request;


class ResourceController extends Controller
{
    public function index()
    {
        $resources = ResearchItem::latest()->paginate(10);
        $categories = ResearchCategory::all();
        return view('admin.resources.index', compact('resources', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'file' => 'nullable|file',
            'category_id' => 'nullable',
            'external_link' => 'nullable'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('downloads', 'public');
        }

        ResearchItem::create($validated);

        return back()->with('success', 'Research stored successfully.');
    }

    public function update(Request $request, ResearchItem $research)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'file' => 'nullable|file',
            'category_id' => 'nullable',
            'external_link' => 'nullable'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('downloads', 'public');
        }

        $research->update($validated);

        return back()->with('success', 'Research updated successfully.');
    }

    public function destroy(ResearchItem $research)
    {
        $research->delete();
        return back()->with('success', 'research deleted successfully.');
    }
    public function show($slug)
    {
        $research = ResearchItem::with('category')->where('slug', $slug)->firstOrFail();

        return view('admin.resources.show', compact('research'));
    }
    // Update program status
    public function updateStatus(Request $request, ResearchItem $research)
    {
        $request->validate([
            'status' => 'required|in:draft,published,archived',
        ]);

        $research->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Program status updated successfully!');
    }
}
