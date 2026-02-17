<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        $categories = Category::all();
        return view('admin.programs.index', compact('programs', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/program/';
            $fileName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Create folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move image to public folder
            $image->move($destinationPath, $fileName);

            // Save relative path in DB
            $validated['image'] = "$fileName";
        }

        Program::create($validated);

        return back()->with('success', 'Program created successfully.');
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/program/';
            $fileName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Create folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move image to public folder
            $image->move($destinationPath, $fileName);

            // Save relative path in DB
            $validated['image'] = "$fileName";
        }

        $program->update($validated);

        return back()->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return back()->with('success', 'Program deleted successfully.');
    }
    public function show($slug)
    {
        $program = Program::with('category')->where('slug', $slug)->firstOrFail();

        return view('admin.programs.show', compact('program'));
    }
    // Update program status
    public function updateStatus(Request $request, Program $program)
    {
        $request->validate([
            'status' => 'required|in:draft,published,archived',
        ]);

        $program->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Program status updated successfully!');
    }
}
