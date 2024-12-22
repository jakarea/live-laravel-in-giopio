<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Session;

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

    public function contactPage(Request $request)
    {
        $question = $request->q;
        $user_name = $request->name;
        $user_email = $request->email;
        $user_message = $request->message;
        $user_subject = $request->subject;
        return view('frontend/contact');
    }

    public function contactPost(Request $request)
    {

        $request->validate([
            'name' => 'required|max:40|min:3|string',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|min:3',
            'message' => 'required|string|max:500'
        ]);

        $user_name = $request->name;
        $user_email = $request->email;
        $user_message = $request->message;
        $user_subject = $request->subject;

        return [$user_name, $user_email, $user_message];
    }


    public function viewSession(Request $request){
        
       // $request->session()->put('key', 1);
        $session_id = $request->session()->regenerate();
        $key = $request->session()->get('key');
        $request->session()->put('user',['member'=>'John Doe']);
        $request->session()->push('user.teams', 'developers');
        echo csrf_token();
        return Session::all();
    }
}
