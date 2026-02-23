<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\PartnershipRequest;
use App\Models\Post;
use App\Models\Program;
use App\Models\Question;
use App\Models\ResearchCategory;
use App\Models\ResearchItem;
use App\Models\Story;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $news = Post::where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
        $stories = Story::where('status', 'published')
            ->latest()->paginate(6);
        $programs = Program::with('category')->get()->take(3);
        // Latest 6 research items across all categories
        $latestItems = ResearchItem::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();
        $partners = Partner::where('status', 'active')->get();
        return view('pages.home', compact('news', 'stories', 'programs', 'latestItems', 'partners'));
    }

    public function about()
    {
        $faqs = Faq::where('is_active', true)->get();
        $programs = Program::with('category')->get();
        return view('pages.about', compact('faqs', 'programs'));
    }

    public function impact()
    {
        $stories = Story::where('status', 'published')
            ->latest()->paginate(6);
        return view('pages.impact',compact('stories'));
    }

    public function contact()
    {
        $faqs = Faq::where('is_active', true)->get();
        return view('pages.contact', compact('faqs'));
    }
    public function news()
    {
        $news = Post::with('category')->orderBy('created_at', 'desc')->paginate(6);
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
        $faqs = Faq::where('is_active', true)->get();
        return view('pages.partner_with_us', compact('partners', 'faqs'));
    }
    public function TeamMember()
    {
        $leadership = TeamMember::where('category', 'Leadership')->where('status', 'active')->get();
        $board = TeamMember::where('category', 'Board')->where('status', 'active')->get();
        $others = TeamMember::where('category', 'Other')->where('status', 'active')->get();
        return view('pages.our_teams', compact('leadership', 'board', 'others'));
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
        return view('pages.program_categories', compact('category', 'programs'));
    }

    // Show single program
    public function showPrograms($slug)
    {
        $program = Program::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $category = Category::where('id', $program->category_id)->first();
        $posts = Post::where('category_id', $category->id)->get();
        // Latest 6 research items across all categories
        $latestItems = ResearchItem::where('status', 'published')
            ->where('category_id', $category->id)
            ->latest()
            ->take(6)
            ->get();
        return view('pages.program_show', compact('program', 'category', 'posts', 'latestItems'));
    }

    public function articles()
    {
        $articles = Article::with('category')->orderBy('created_at', 'desc')->get();
        return view('pages.articles', compact('articles'));
    }
    public function articlesDetail($id)
    {
        $article = Article::findOrFail($id);
        return view('pages.article-details', compact('article'));
    }

    public function media()
    {
        $media = Gallery::latest()->paginate(12);
        return view('pages.media', compact('media'));
    }

    public function stories()
    {
        $stories = Story::where('status', 'published')->get();
        return view('pages.stories', compact('stories'));
    }

    public function research()
    {
        $categories = ResearchCategory::where('type', 'research')
            ->with(['items' => function ($query) {
                $query->where('status', 'published')->latest()->take(5);
            }])
            ->get();

        // Latest 6 research items across all categories
        $latestItems = ResearchItem::where('status', 'published')
            ->latest()
            ->take(6)
            ->get();

        return view('pages.research', compact('categories', 'latestItems'));
    }

    public function indexResearch()
    {
        $categories = ResearchCategory::where('type', 'research')->get();
        return view('pages.research', compact('categories'));
    }

    public function categoryResearch($slug)
    {
        $category = ResearchCategory::whereSlug($slug)->firstOrFail();
        $items = $category->items()->paginate(12);

        return view('pages.research_category', compact('category', 'items'));
    }

    public function showResearch($slug)
    {
        $item = ResearchItem::whereSlug($slug)->firstOrFail();
        return view('pages.research_show', compact('item'));
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required|min:5'
        ]);

        Faq::create($request->all());

        return back()->with('success', 'Your question has been submitted!');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'message' => 'required',
        ]);

        // Save to database
        $contact = Contact::create($validated);

        // Send email
        Mail::to('info@rwandadiabetes.rw')->send(new ContactMail($contact));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
