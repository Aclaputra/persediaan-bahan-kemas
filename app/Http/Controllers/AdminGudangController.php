<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Support\Facades\DB;

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
        $total_masuk = DataBarang::where('jalur','=','masuk')->count();
        $total_keluar = DataBarang::where('jalur','=','keluar')->count();
        $barang_masuk = DB::table('data_barangs')
            // ->join('data_suppliers','data_suppliers.id','=','data_barangs.data_suppliers_id')
            ->where('jalur','=','masuk')
            ->get();
        return view('admin-gudang.dashboard', compact('total_masuk','total_keluar','barang_masuk'));
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
