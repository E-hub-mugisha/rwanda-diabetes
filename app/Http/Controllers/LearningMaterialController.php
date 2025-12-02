<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LearningMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LearningMaterialController extends Controller
{
    public function index()
    {
        $materials = LearningMaterial::where('status', 'published')->paginate(10);
        return view('pages.learning_materials', compact('materials'));
    }

    public function show($slug)
    {
        $material = LearningMaterial::where('slug', $slug)->firstOrFail();
        return view('pages.learning_material_show', compact('material'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->with('materials')->firstOrFail();
        return view('pages.learning_material_category', compact('category'));
    }

    public function indexMaterial()
    {
        $materials = LearningMaterial::orderBy('id', 'desc')->get();
        return view('admin.learning-materials.index', compact('materials'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.learning-materials.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'excerpt'       => 'nullable|string',
            'content'       => 'nullable|string',
            'material_type' => 'required|in:article,video,pdf,infographic',
            'status'        => 'required|in:draft,published',
            'file'          => 'nullable|file|mimes:pdf,mp4,jpg,jpeg,png',
            'thumbnail'     => 'nullable|image|mimes:jpg,jpeg,png',
            'category_id'   => 'nullable|exists:categories,id'
        ]);

        $data = $request->all();
        $data['author_id'] = auth()->id();

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('materials/files');
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('materials/thumbnails');
        }

        LearningMaterial::create($data);

        return redirect()->back()->with('success', 'Learning material added successfully.');
    }

    public function showMaterial(LearningMaterial $learning_material)
    {
        return view('admin.learning-materials.show', compact('learning_material'));
    }

    public function edit(LearningMaterial $learning_material)
    {
        $categories = Category::all();
        return view('admin.learning-materials.edit', compact('learning_material', 'categories'));
    }

    public function update(Request $request, LearningMaterial $material)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'excerpt'       => 'nullable|string',
            'content'       => 'nullable|string',
            'material_type' => 'required|in:article,video,pdf,infographic',
            'status'        => 'required|in:draft,published',
            'file'          => 'nullable|file|mimes:pdf,mp4,jpg,jpeg,png',
            'thumbnail'     => 'nullable|image|mimes:jpg,jpeg,png',
            'category_id'   => 'nullable|exists:categories,id'
        ]);

        $data = $request->all();

        if ($request->hasFile('file')) {
            Storage::delete($material->file);
            $data['file'] = $request->file('file')->store('materials/files');
        }

        if ($request->hasFile('thumbnail')) {
            Storage::delete($material->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('materials/thumbnails');
        }

        $material->update($data);

        return redirect()->back()->with('success', 'Material updated successfully.');
    }

    public function destroy(LearningMaterial $material)
    {
        Storage::delete([$material->file, $material->thumbnail]);

        $material->delete();

        return redirect()->back()->with('success', 'Material deleted successfully.');
    }
}
