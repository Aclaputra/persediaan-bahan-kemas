<?php

namespace App\Http\Controllers;

class SupplierController extends Controller
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
        return view('supplier.dashboard');
    }

    public function setting()
    {
        return view('supplier.setting');
    }

    public function profile()
    {
        return view('supplier.profile');
    }
}
