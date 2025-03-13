<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    public function index()
    {
        $sopir = Sopir::all();
        return view('sopir.index')
            ->with('sopir', $sopir);
    }

    public function create()
    {
        return view('sopir.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'nama'      => 'required|max:45',
            'nomor_hp'    => 'required|max:45',
            'alamat'     => 'required|max:45',
            'pengalaman'=> 'required|max:45'
        ]);

        Sopir::create($val);
        return redirect()->route('sopir.index')->with('success', $val['nama']. ' berhasil di Simpan');
    }

    public function show(Sopir $sopir)
    {
        //
    }

    public function edit(Sopir $sopir)
    {
        return view('sopir.edit')->with('sopir', $sopir);
    }

    public function update(Request $request, Sopir $sopir)
    {
        $val = $request->validate([
            'nama'      => 'required|max:45',
            'nomor_hp'    => 'required|max:45',
            'alamat'     => 'required|max:45',
            'pengalaman'=> 'required|max:45'
        ]);

        $sopir->update($val);
        return redirect()->route('sopir.index')->with('success', $val['nama'].' berhasil di Edit');
    }

    public function destroy(Sopir $sopir)
    {
        //
    }
}
