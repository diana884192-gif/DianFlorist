<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pesanan;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = 
        Pembayaran::with('pesanan')->get();

        return view('pembayaran.index',
            compact('data'));
    }
    public function create()
    {
        $pesanan = Pesanan::all();

        return view('pembayaran.create',
            compact('pesanan'));
    }
    public function store(Request $request)
    {
        Pembayaran::create([
            'pesanan_id' => $request->pesanan_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return redirect('/pembayaran');
    }
}