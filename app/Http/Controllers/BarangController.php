<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::orderBy('created_at', 'DESC')->get();
        return view('barangs.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangs.create');
    }
    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang added successfully');
    }
    public function show(string $id)
    {
        $barang= barang::findOrFail($id);
        return view('barangs.show', compact('barang'));
    }
    public function edit(string $id)
    {
        $barang = barang::findOrFail($id);
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barang')->with('success', 'barang Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang')->with('success', 'barang Deleted Successfully');
    }
}
