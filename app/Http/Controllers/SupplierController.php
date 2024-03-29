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
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = DataSupplier::all();
        return view('admin-gudang.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-gudang.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'detail' => 'required',
        ]);

        $barang_masuk = new DataSupplier();
        $barang_masuk->nama_supplier = $validatedData['nama_supplier'];
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
        return view('admin-gudang.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        return view('admin-gudang.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSupplier $dataSupplier)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang_masuk = DataBarang::findOrFail($id);
        $barang_masuk->nama_supplier = $validatedData['nama_supplier'];
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
