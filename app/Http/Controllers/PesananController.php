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
        $data = Pesanan::with(['pelanggan', 'produk'])->get();
        return view('pesanan.index', compact('data'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('pesanan.create', compact('pelanggan', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'produk_id'       => 'required|exists:produks,id',
            'jumlah'          => 'required|integer|min:1',
            'tanggal_pesanan' => 'required|date',
        ]);

        Pesanan::create([
            'pelanggan_id'    => $request->pelanggan_id,
            'produk_id'       => $request->produk_id,
            'jumlah'          => $request->jumlah,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'status'          => 'proses',
        ]);

        return redirect('/pesanan')->with('success', 'Pesanan berhasil ditambahkan 🌸');
    }

    public function edit($id)
    {
        $pesanan   = Pesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $produk    = Produk::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan', 'produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'produk_id'       => 'required|exists:produks,id',
            'jumlah'          => 'required|integer|min:1',
            'tanggal_pesanan' => 'required|date',
            'status'          => 'required|in:proses,selesai,batal',
        ]);

        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->only([
            'pelanggan_id',
            'produk_id',
            'jumlah',
            'tanggal_pesanan',
            'status',
        ]));

        return redirect('/pesanan')->with('success', 'Pesanan berhasil diupdate 🌸');
    }

    public function destroy($id)
    {
        Pesanan::findOrFail($id)->delete();
        return redirect('/pesanan')->with('success', 'Pesanan berhasil dihapus 🌸');
    }
}