<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $data =
        Pesanan::with(['pelanggan','produk'])->get();

        return view('pesanan.index',
            compact('data'));
    }
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();

        return view('pesanan.create',
            compact('pelanggan','produk'));
    }
    public function store(Request $request)
    {
       $request->validate([
        'pelanggan_id' => 'required',
        'produk_id' => 'required',
        'jumlah' => 'required',
        'tanggal_pesanan' => 'required',
       ]);

       Pesanan::create([
        'pelanggan_id' => $request->pelanggan_id,
        'produk_id' => $request->produk_id,
        'jumlah' => $request->jumlah,
        'tanggal_pesanan' =>$request->tanggal_pesanan,
        'status' => 'pending',
       ]);

       return redirect('/pesanan');
    }
    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();

        return view('pesanan.edit',
            compact('pesanan','pelanggan','produk'));
    }
    public function update(Request $request,$id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update([
            'pelanggan_id' =>$request->pelanggan_id,
            'produk_id' =>$request->produk_id,
            'jumlah' =>$request->jumlah,
            'tanggal_pesanan' =>$request->tanggal_pesanan,
        ]);
        return redirect('/pesanan');
    }
    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect('/pesanan');
    }
}
