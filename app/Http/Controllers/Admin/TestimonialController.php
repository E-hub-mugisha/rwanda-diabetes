<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'story' => 'required|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        $data = $request->only('name', 'title', 'story');
        $data['is_active'] = $request->is_active ? 1 : 0;

        // Upload photo
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'story' => 'required|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        $data = $request->only('name', 'title', 'story');
        $data['is_active'] = $request->is_active ? 1 : 0;

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Testimonial deleted successfully.');
    }
}
