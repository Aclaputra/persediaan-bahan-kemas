<?php

namespace App\Http\Controllers;

use App\Models\DataCustomer;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = DataSupplier::all();
        return view('admin-gudang.barang.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-gudang.barang.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'detail' => 'required',
        ]);

        $barang_masuk = new DataSupplier();
        $barang_masuk->nama = $validatedData['nama'];
        $barang_masuk->detail = $validatedData['detail'];
        $barang_masuk->save();

        return redirect()->route('admin.gudang.supplier.index')->with('success', 'Barang Masuk Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        return view('admin-gudang.barang.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        return view('admin-gudang.barang.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSupplier $dataSupplier)
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
    public function destroy(DataSupplier $dataSupplier)
    {
        $barang_masuk = DataBarang::findOrFail($id);
        $barang_masuk->delete();

        return redirect()->route('admin.gudang.masuk.index')->with('success', 'barang masuk deleted successfully');
    }
}
