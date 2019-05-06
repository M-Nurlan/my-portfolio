<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = \App\Blog::with('user')->get();

        return view('home', ['com'=>$comments]);
    }

    public function blog() {
        $comments = \App\Blog::with('user')->get();

        return view('blog', ['com'=>$comments]);
    }
}
