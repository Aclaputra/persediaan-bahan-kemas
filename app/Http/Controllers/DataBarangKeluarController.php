<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // find all with jalur of keluar
        $barang_keluar = DataBarang::where('jalur','=','keluar');
        return view('admin-gudang.barang.keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $blogs = Blogs::all();
        // $blogCategories = [];

        // foreach ($blogs as $blog) {
        //     $blogCategories[] = $blog->category;
        // }

        return view('admin-gudang.barang.keluar.create');
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
            'jalur' => 'sometimes',
            'stok' => 'required',
        ]);

        $barang_keluar = new DataBarang();
        $barang_keluar->nama = $validatedData['nama'];
        $barang_keluar->harga = $validatedData['harga'];
        $barang_keluar->jenis = $validatedData['jenis'];
        $barang_keluar->jalur = $validatedData['jalur'];
        $barang_keluar->stok = $validatedData['stok'];
        $barang_keluar->save();

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'Barang keluar Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $barang_keluar = DataBarang::findOrFail($id);
        return view('admin-gudang.barang.keluar.show', compact('barang_keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        // $blog = Blogs::findOrFail($id);
        // $blogCategories = BlogsCategories::all();
        $barang_keluar = DataBarang::findOrFail($id);
        return view('adming-gudang.barang.keluar.edit', compact('barang_keluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataBarang $dataBarang)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang_keluar = DataBarang::findOrFail($id);
        $barang_keluar->nama = $validatedData['nama'];
        $barang_keluar->harga = $validatedData['harga'];
        $barang_keluar->jenis = $validatedData['jenis'];
        $barang_keluar->stok = $validatedData['stok'];
        $barang_keluar->save();

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'barang keluar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataBarang $dataBarang)
    {
        $barang_keluar = DataBarang::findOrFail($id);
        $barang_keluar->delete();

        return redirect()->route('admin.gudang.keluar.index')->with('success', 'barang keluar deleted successfully');
    }
}
