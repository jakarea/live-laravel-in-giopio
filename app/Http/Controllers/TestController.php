<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test/landing', ['title' => 'This is Landing Page']);
    }
}
