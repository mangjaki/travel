<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kendaraan;
use App\Models\Rute;
use App\Models\Sopir;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal.index')
                ->with('jadwal', $jadwal);
    }

    public function create()
    {
        $rute = Rute::all();
        $kendaraan = Kendaraan::all();
        $sopir = Sopir::all();
        return view('jadwal.create')->with('rute',$rute)->with('kendaraan',$kendaraan)->with('sopir',$sopir);
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'rute_id'=> 'required|exists:rutes,id',
            'kendaraan_id'=> 'required|exists:kendaraans,id',
            'sopir_id'=> 'required|exists:sopirs,id',
            'tanggal_berangkat'=> 'required|date',
            'tanggal_tiba'=> 'required|date'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
