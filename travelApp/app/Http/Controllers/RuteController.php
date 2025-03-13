<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{

    public function index()
    {
        $rute = Rute::all();
        return view('rute.index')
                ->with('rute', $rute);
    }

    public function create()
    {
        return view('rute.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'asal'      => 'required|max:45',
            'tujuan'    => 'required|max:45',
            'harga'     => 'required|max:45',
            'estimasi_waktu'=> 'required|max:45'
        ]);

        Rute::create($val);
        return redirect()->route('rute.index')->with('success', $val['tujuan']. ' berhasil di Simpan');
    }

    public function show(Rute $rute)
    {
        //
    }

    public function edit(Rute $rute)
    {
        return view('rute.edit')->with('rute', $rute);
    }

    public function update(Request $request, Rute $rute)
    {
        $val = $request->validate([
            'asal'      => 'required|max:45',
            'tujuan'    => 'required|max:45',
            'harga'     => 'required|max:45',
            'estimasi_waktu'=> 'required|max:45'
        ]);

        $rute->update($val);
        return redirect()->route('rute.index')->with('success', $val['tujuan'].' berhasil di Edit');
    }

    public function destroy(Rute $rute)
    {
        //
    }
}
