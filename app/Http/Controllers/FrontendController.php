<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage()
    {
        return view('frontend/home');
    }

    public function aboutPage()
    {
        return view('frontend/about');
    }

    public function blogPage()
    {
        return view('frontend.blog');
    }
}
