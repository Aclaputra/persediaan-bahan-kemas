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
        $customer = DataCustomer::all();
        return view('admin-gudang.customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-gudang.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'detail' => 'required',
        ]);

        $customer = new DataCustomer();
        $customer->nama = $validatedData['nama'];
        $customer->detail = $validatedData['detail'];
        $customer->alamat = $validatedData['alamat'];
        $customer->save();

        return redirect()->route('admin.gudang.customer.index')->with('success', 'Barang customer Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $customer = DataCustomer::findOrFail($id);
        return view('admin-gudang.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $customer = DataCustomer::findOrFail($id);
        return view('admin-gudang.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'detail' => 'required',
        ]);

        $customer = DataCustomer::findOrFail($id);
        $customer->nama = $validatedData['nama'];
        $customer->alamat = $validatedData['alamat'];
        $customer->detail = $validatedData['detail'];
        $customer->save();

        return redirect()->route('admin.gudang.customer.index')->with('success', 'barang customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataCustomer $datacustomer, string $id)
    {
        $customer = DataCustomer::findOrFail($id);
        $customer->delete();

        return redirect()->route('admin.gudang.customer.index')->with('success', 'barang customer deleted successfully');
    }
}
