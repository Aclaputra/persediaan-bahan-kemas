<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
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
        return view('customer.dashboard');
    }

    public function setting()
    {
        return view('customer.setting');
    }

    public function profile()
    {
        return view('customer.profile');
    }
}
