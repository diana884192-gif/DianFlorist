<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pesanan;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::with(['pesanan.pelanggan', 'pesanan.produk'])->get();
        return view('pembayaran.index', compact('data'));
    }

    public function create()
    {
        $pesanan = Pesanan::all();
        return view('pembayaran.create', compact('pesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id'         => 'required|exists:pesanans,id',
            'metode_pembayaran'  => 'required|string',
            'status_pembayaran'  => 'required|in:lunas,pending,gagal',
        ]);

        Pembayaran::create([
            'pesanan_id'         => $request->pesanan_id,
            'metode_pembayaran'  => $request->metode_pembayaran,
            'status_pembayaran'  => $request->status_pembayaran,
        ]);

        return redirect('/pembayaran')->with('success', 'Pembayaran berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data    = Pembayaran::findOrFail($id);
        $pesanan = Pesanan::all();
        return view('pembayaran.edit', compact('data', 'pesanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pesanan_id'         => 'required|exists:pesanans,id',
            'metode_pembayaran'  => 'required|string',
            'status_pembayaran'  => 'required|in:lunas,pending,gagal',
        ]);

        $data = Pembayaran::findOrFail($id);
        $data->update([
            'pesanan_id'         => $request->pesanan_id,
            'metode_pembayaran'  => $request->metode_pembayaran,
            'status_pembayaran'  => $request->status_pembayaran,
        ]);

        return redirect('/pembayaran')->with('success', 'Pembayaran berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = Pembayaran::findOrFail($id);
        $data->delete();
        return redirect('/pembayaran')->with('success', 'Pembayaran berhasil dihapus!');
    }
}