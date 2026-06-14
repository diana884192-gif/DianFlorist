<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\Pembayaran;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'totalProduk' => Produk::count(),
            'totalPelanggan' => Pelanggan::count(),
            'totalPesanan' => Pesanan::count(),
            'totalPembayaran' => Pembayaran::count(),
        ]);
    }
}
