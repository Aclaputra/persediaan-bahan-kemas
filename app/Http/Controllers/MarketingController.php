<?php

namespace App\Http\Controllers;

class MarketingController extends Controller
{
    public function __construct()
    {
        // tambah auth, is.marketing
        $this->middleware('auth');
    }

    public function index()
    {
        return view('marketing.dashboard');
    }

    public function setting()
    {
        return view('marketing.setting');
    }

    public function profile()
    {
        return view('marketing.profile');
    }
}
