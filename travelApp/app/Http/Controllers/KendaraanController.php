<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index')
                ->with('kendaraan', $kendaraan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'plat'          => 'required|max:45',
            'merk_mobil'    => 'required|max:45',
            'warna'         => 'required|max:45',
            'kapasitas'     => 'required|max:45',
            'bahan_bakar'   => 'required|max:45',
            'status'        => 'required|max:45'
        ]);

        Kendaraan::create($val);
        return redirect()->route('kendaraan.index')->with('success', $val['merk_mobil']. 'Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit')->with('kendaraan',$kendaraan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $val = $request->validate([
            'plat'          => 'required|max:45',
            'merk_mobil'    => 'required|max:45',
            'warna'         => 'required|max:45',
            'kapasitas'     => 'required|max:45',
            'bahan_bakar'   => 'required|max:45',
            'status'        => 'required|max:45'
        ]);

        $kendaraan->update($val);
        return redirect()->route('kendaraan.index')->with('success', $val['merk_mobil'].' berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
    }
}
