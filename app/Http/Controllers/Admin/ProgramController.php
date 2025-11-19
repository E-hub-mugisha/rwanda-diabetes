<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('programs', 'public');
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
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('programs', 'public');
        }

        $program->update($validated);

        return back()->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return back()->with('success', 'Program deleted successfully.');
    }
}
