<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // find all with jalur of keluar
        // $barang_keluar = DataBarang::all();
        $barang_keluar = DB::table('data_barangs')
            // ->join('data_suppliers','data_suppliers.id','=','data_barangs.data_suppliers_id')
            ->where('jalur','=','keluar')
            ->get();
        // dd($barang_keluar);
        // barang inner join supplier
        // dd($barang_keluar[0]->data_suppliers_id);
        return view('admin-gudang.barang.keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $barang_keluar = DataBarang::where('jalur','=','keluar');

        return view('admin-gudang.barang.keluar.create');
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

        $barang_keluar = new DataBarang();
        $barang_keluar->nama_barang = $validatedData['nama_barang'];
        $barang_keluar->harga = $validatedData['harga'];
        $barang_keluar->jenis = $validatedData['jenis'];
        $barang_keluar->jalur = "keluar";
        $barang_keluar->data_suppliers_id = 1;
        $barang_keluar->stok = $validatedData['stok'];
        $barang_keluar->save();

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'Barang keluar Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBarang $barang, String $id)
    {
        // dd($barang);
        $barang = DataBarang::findOrFail($id);

        return view('admin-gudang.barang.keluar.show', compact('barang'));
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
        return view('admin-gudang.barang.keluar.edit', compact('barang'));
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
        // $barang_keluar = DB::table('data_barangs')->whereRaw('kd_barang','=',$kd_barang)->first();
        $barang_keluar = DataBarang::findOrFail($id);
        // dd($barang_keluar);
        $barang_keluar->nama_barang = $validatedData['nama_barang'];
        $barang_keluar->harga = $validatedData['harga'];
        $barang_keluar->jenis = $validatedData['jenis'];
        $barang_keluar->stok = $validatedData['stok'];
        // $barang_keluar->data_suppliers_id = $validatedData['data_suppliers_id'];
        $barang_keluar->save();
        // $barang_keluar->update($request->all());

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'barang keluar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $barang_keluar = DataBarang::findOrFail($id);
        $barang_keluar->delete();

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'barang keluar deleted successfully');
    }
}
