<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display all team members.
     */
    public function index()
    {
        $teamMembers = TeamMember::orderBy('name')->get();
        return view('admin.team_members.index', compact('teamMembers'));
    }

    /**
     * Store new team member.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'role'      => 'required|string|max:255',
            'email'     => 'nullable|email',
            'phone'     => 'nullable|string|max:50',
            'status'    => 'required|in:active,inactive',
            'bio'       => 'nullable|string',
            'photo'     => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload photo
        $photoPath = $request->file('photo')->store('team', 'public');

        TeamMember::create([
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'position'  => $request->position,
            'role'      => $request->role,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'bio'       => $request->bio,
            'status'    => $request->status,
            'photo'     => $photoPath,
            'linkedin'  => $request->linkedin,
            'twitter'   => $request->twitter,
            'instagram' => $request->instagram,
        ]);

        return redirect()->back()->with('success', 'Team member added successfully.');
    }

    /**
     * Show single team member (if needed via API or route).
     */
    public function show($id)
    {
        $member = TeamMember::findOrFail($id);
        return response()->json($member);
    }

    /**
     * Update team member.
     */
    public function update(Request $request, $id)
    {
        $member = TeamMember::findOrFail($id);

        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'role'      => 'required|string|max:255',
            'email'     => 'nullable|email',
            'phone'     => 'nullable|string|max:50',
            'status'    => 'required|in:active,inactive',
            'bio'       => 'nullable|string',
            'photo'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = $member->photo;

        // If new image uploaded → replace old one
        if ($request->hasFile('photo')) {

            // delete old photo
            if ($member->photo && Storage::disk('public')->exists($member->photo)) {
                Storage::disk('public')->delete($member->photo);
            }

            // upload new
            $photoPath = $request->file('photo')->store('team', 'public');
        }

        // Update member
        $member->update([
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'position'  => $request->position,
            'role'      => $request->role,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'bio'       => $request->bio,
            'status'    => $request->status,
            'photo'     => $photoPath,
            'linkedin'  => $request->linkedin,
            'twitter'   => $request->twitter,
            'instagram' => $request->instagram,
        ]);

        return redirect()->back()->with('success', 'Team member updated successfully.');
    }

    /**
     * Delete team member.
     */
    public function destroy($id)
    {
        $member = TeamMember::findOrFail($id);

        // Delete photo from storage
        if ($member->photo && Storage::disk('public')->exists($member->photo)) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully.');
    }
}
