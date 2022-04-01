<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.user.news');
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
}
