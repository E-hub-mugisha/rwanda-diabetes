<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Story;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $news = Post::where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
        $stories = Story::where('status', 'published')
                    ->latest()->paginate(6);
        return view('pages.home', compact('news','stories'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function programs()
    {
        return view('pages.programs');
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
        return view('pages.partner_with_us');

    }
}
