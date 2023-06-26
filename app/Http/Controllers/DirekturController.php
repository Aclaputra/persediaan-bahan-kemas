<?php

namespace App\Http\Controllers;

class DirekturController extends Controller
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
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('direktur.dashboard');
    }

    public function setting()
    {
        return view('direktur.setting');
    }

    public function profile()
    {
        return view('direktur.profile');
    }
}
