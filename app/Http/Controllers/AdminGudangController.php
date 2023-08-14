<?php

namespace App\Http\Controllers;

class AdminGudangController extends Controller
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
        return view('admin-gudang.dashboard');
    }

    public function setting()
    {
        return view('admin-gudang.setting');
    }

    public function profile()
    {
        return view('admin-gudang.profile');
    }

    public function masuk()
    {
        return view('admin-gudang.barang.masuk');
    }

    public function keluar()
    {
        return view('admin-gudang.barang.keluar');
    }
}
