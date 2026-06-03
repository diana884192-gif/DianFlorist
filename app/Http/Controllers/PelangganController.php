<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();

        return view('pelanggan.index',
            compact('pelanggan'));
    }
    public function create()
    {
        return view('pelanggan.create');
    }
    public function store(Request $request)
    {
        Pelanggan::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/pelanggan');
    }
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);

        return view('pelanggan.edit',
            compact('pelanggan'));
    }
    public function update(Request $request,$id)
    {
        $pelanggan = Pelanggan::find($id);

        $pelanggan->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/pelanggan');
    }
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        $pelanggan->delete();

        return redirect('/pelanggan');
    }
}
