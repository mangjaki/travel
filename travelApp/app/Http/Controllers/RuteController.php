<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rute = Rute::all();
        return view('rute.index')
                ->with('rute', $rute);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'asal'      => 'required|max:45',
            'tujuan'    => 'required|max:45',
            'harga'     => 'required|max:45',
            'estimasi_waktu'=> 'required|max:45',
        ]);

        Rute::create($val);
        return redirect()->route('rute.index')->with('success', $val['asal']. 'Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rute $rute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rute $rute)
    {
        $rute = Rute::find($rute);
        return view('rute.edit')->with('rute', $rute);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rute $rute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rute $rute)
    {
        //
    }
}
