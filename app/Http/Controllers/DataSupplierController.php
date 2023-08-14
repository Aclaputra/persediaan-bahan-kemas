<?php

namespace App\Http\Controllers;

use App\Models\DataSupplier;
use Illuminate\Http\Request;

class DataSupplierController extends Controller
{
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

        $supplier = new DataSupplier();
        $supplier->nama_supplier = $validatedData['nama_supplier'];
        $supplier->detail = $validatedData['detail'];
        $supplier->save();

        return redirect()->route('admin.gudang.supplier.index')->with('success', 'Supplier Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSupplier $supplier, String $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        return view('admin-gudang.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSupplier $supplier, string $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        // dd($supplier);
        return view('admin-gudang.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'detail' => 'required',
        ]);

        $supplier = DataSupplier::findOrFail($id);
        // dd($supplier);
        $supplier->nama_supplier = $validatedData['nama_supplier'];
        $supplier->detail = $validatedData['detail'];
        $supplier->save();

        return redirect()->route('admin.gudang.supplier.index')->with('success', 'Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataSupplier $dataSupplier, String $id)
    {
        $supplier = DataSupplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('admin.gudang.supplier.index')->with('success', 'Supplier deleted successfully');
    }
}
