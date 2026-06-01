<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index',compact('produk'));
    }
    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        Produk::create([
            'nama_produk' =>
    $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/produk');
    }
    public function edit($id)
    {
        $produk = Produk::find0rFail($id);
        return view('produk.edit',
    compact('produk'));
    }
    public function update(Request $request,$id)
    {
        $produk = Produk::find0rFail($id);

        $produk->update([
            'nama_produk' => $requst->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/produk');
    }
}
