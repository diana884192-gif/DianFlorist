<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $produk = 
            Produk::where('nama_produk', 'like', '%'.
            $request->search. '%')->get();
        } else {
            $produk = Produk::all();
        }
        return view('produk.index',compact('produk'));
    }
    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        $namaFile = null;

        if ($request->hasFile('gambar')) {
            $namaFile = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('images/produk'),
                $namaFile
            );
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $namaFile
        ]);

        return redirect('/produk');
        }
            public function edit($id)
            {
                $produk = Produk::findOrFail($id);
                return view('produk.edit',
            compact('produk'));
            }
            public function update(Request $request, $id)
            {
                $produk = Produk::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $namaFile = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images/produk'), $namaFile);
        } else {
            $namaFile = $produk->gambar; 
        }

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'gambar'      => $namaFile 
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil diupdate 🌸');
    }
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus 🗑🌸');
    }
}
