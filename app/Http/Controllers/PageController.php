<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Show the Home page
    public function home()
    {
        return view('index');
    }

    // Show the About Us page
    public function about()
    {
        return view('about');
    }

    // Show the Services page
    public function services()
    {
        return view('services');
    }

    // Show the Projects page
    public function projects()
    {
        return view('projects');
    }

    // Show the Blog page
    public function blog()
    {
        return view('blog');
    }

    // Show the Contact Us page
    public function contact()
    {
        return view('contact');
    }
}

