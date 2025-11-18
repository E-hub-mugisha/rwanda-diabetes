<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
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
