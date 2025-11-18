<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::where('status', 'published')->orderBy('published_at', 'desc')->take(3)->get();
        return view('pages.home', compact('posts'));
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
}
