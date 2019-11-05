<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::limit(3)->get();
        $services = Service::limit(3)->get();
        return view('pages.home', compact('posts', 'services'));
    }
}
