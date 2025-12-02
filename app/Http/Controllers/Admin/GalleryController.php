<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'nullable|string|max:255',
            'type'        => 'required|in:image,video',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
            'video_url'   => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->type === 'image' && $request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        Gallery::create($data);

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery item created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'       => 'nullable|string|max:255',
            'type'        => 'required|in:image,video',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
            'video_url'   => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->type === 'image' && $request->hasFile('image')) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery item deleted successfully.');
    }
}
