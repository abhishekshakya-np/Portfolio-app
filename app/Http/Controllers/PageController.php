<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function contact()
    {
        return view('contact');
    }
}
