<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // find all with jalur of masuk
        // $barang_masuk = DataBarang::all();
        $barang_masuk = DB::table('data_barangs')
            // ->join('data_suppliers','data_suppliers.id','=','data_barangs.data_suppliers_id')
            ->where('jalur','=','masuk')
            ->get();
        // dd($barang_masuk);
        // barang inner join supplier
        // dd($barang_masuk[0]->data_suppliers_id);
        return view('admin-gudang.barang.masuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $barang_masuk = DataBarang::where('jalur','=','masuk');

        return view('admin-gudang.barang.masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang_masuk = new DataBarang();
        $barang_masuk->nama_barang = $validatedData['nama_barang'];
        $barang_masuk->harga = $validatedData['harga'];
        $barang_masuk->jenis = $validatedData['jenis'];
        $barang_masuk->jenis = 'masuk';
        $barang_masuk->stok = $validatedData['stok'];
        $barang_masuk->data_suppliers_id = 1;
        $barang_masuk->save();

        return redirect()->route('admin.gudang.masuk.index')->with('success', 'Barang Masuk Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBarang $barang, String $id)
    {
        // dd($barang);
        $barang = DataBarang::findOrFail($id);

        return view('admin-gudang.barang.masuk.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataBarang $barang, String $id)
    {
        // dd($id);
        // $barang = DataBarang::findOrFail($id);
        $barang = DB::table('data_barangs')
            // ->join('data_suppliers','data_suppliers.id','=','data_barangs.data_suppliers_id')
            ->where('data_barangs.id', '=', $id)
            ->first();
        // dd($barang);
        // $supplier_list = DataSupplier::all()->except([$barang->data_suppliers_id]);
        // dd($supplier_list);
        return view('admin-gudang.barang.masuk.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            // 'data_suppliers_id' => 'required',
        ]);
        // dd($kd_barang);
        // $barang_masuk = DB::table('data_barangs')->whereRaw('kd_barang','=',$kd_barang)->first();
        $barang_masuk = DataBarang::findOrFail($id);
        // dd($barang_masuk);
        $barang_masuk->nama_barang = $validatedData['nama_barang'];
        $barang_masuk->harga = $validatedData['harga'];
        $barang_masuk->jenis = $validatedData['jenis'];
        $barang_masuk->stok = $validatedData['stok'];
        // $barang_masuk->data_suppliers_id = $validatedData['data_suppliers_id'];
        $barang_masuk->save();
        // $barang_masuk->update($request->all());

        return redirect()->route('admin.gudang.masuk.index')->with('success', 'barang masuk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $barang_masuk = DataBarang::findOrFail($id);
        $barang_masuk->delete();

        return redirect()->route('admin.gudang.masuk.index')->with('success', 'barang masuk deleted successfully');
    }
}
