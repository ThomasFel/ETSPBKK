<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function collaboration()
    {
        return view('pages.user.collaboration');
    }

    public function company()
    {
        return view('pages.user.company');
    }

    public function news()
    {
        $news = News::with('admin')->get();
        return view('news.news', compact('news'));
    }

    public function order()
    {
        return view('pages.user.order');
    }

    public function profile()
    {
        return view('pages.user.profile');
    }

    public function service()
    {
        return view('pages.user.service');
    }

    public function showPost($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('news.news-show', compact('news'));
    }
}
