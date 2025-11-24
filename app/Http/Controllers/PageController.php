<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use App\Models\PartnershipRequest;
use App\Models\Post;
use App\Models\Program;
use App\Models\Story;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $news = Post::where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
        $stories = Story::where('status', 'published')
            ->latest()->paginate(6);
        return view('pages.home', compact('news', 'stories'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function impact()
    {
        return view('pages.impact');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function news()
    {
        $news = Post::with('category')->get();
        return view('pages.news', compact('news'));
    }
    public function newsDetail($id)
    {
        $new = Post::findOrFail($id);
        return view('pages.news-detail', compact('new'));
    }
    public function values()
    {
        return view('pages.values');
    }
    public function story()
    {
        $stories = Story::where('status', 'published')
            ->latest()->paginate(6);

        return view('stories.index', compact('stories'));
    }

    public function showStory($slug)
    {
        $story = Story::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('stories.show', compact('story'));
    }

    public function partnerWithUs()
    {
        $partners = Partner::where('status', 'active')->get();
        return view('pages.partner_with_us', compact('partners'));
    }
    public function TeamMember()
    {
        $teams = TeamMember::where('status', 'active')->get();
        return view('pages.our_teams', compact('teams'));
    }

    public function showTeam($slug)
    {
        $member = TeamMember::where('slug', $slug)->firstOrFail();

        return view('pages.team_detail', compact('member'));
    }
    public function storeRequest(Request $request)
    {
        $request->validate([
            'organization' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:30',
            'type' => 'required',
            'message' => 'required'
        ]);

        PartnershipRequest::create($request->all());

        return back()->with('success', 'Thank you! We will contact you soon.');
    }
    // List all programs
    public function programs()
    {
        $programs = Program::where('status', 'published')->latest()->paginate(10);
        return view('pages.programs', compact('programs'));
    }

    // List programs by category
    public function categoryPrograms($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $programs = $category->programs()->where('status', 'published')->latest()->paginate(10);
        return view('programs.category', compact('category', 'programs'));
    }

    // Show single program
    public function showPrograms($slug)
    {
        $program = Program::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('programs.show', compact('program'));
    }
}
