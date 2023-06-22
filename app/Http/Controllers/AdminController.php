<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
