<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // find all with jalur of masuk
        $barang_masuk = DataBarang::all();
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
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang_masuk = new DataBarang();
        $barang_masuk->nama = $validatedData['nama'];
        $barang_masuk->harga = $validatedData['harga'];
        $barang_masuk->jenis = $validatedData['jenis'];
        $barang_masuk->stok = $validatedData['stok'];
        $barang_masuk->save();

        return redirect()->route('admin.gudang.masuk.index')->with('success', 'Barang Masuk Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang_masuk = DataBarang::findOrFail($id);
        return view('admin-gudang.barang.masuk.show', compact('barang_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang_masuk = DataBarang::findOrFail($id);
        return view('admin-gudang.barang.masuk.edit', compact('barang_masuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang_masuk = DataBarang::findOrFail($id);
        $barang_masuk->nama = $validatedData['nama'];
        $barang_masuk->harga = $validatedData['harga'];
        $barang_masuk->jenis = $validatedData['jenis'];
        $barang_masuk->stok = $validatedData['stok'];
        $barang_masuk->save();

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
