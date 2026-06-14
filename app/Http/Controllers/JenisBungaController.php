<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBunga;

class JenisBungaController extends Controller
{
   public function index()
   {
    $jenis_bunga = JenisBunga::all();

    return view('jenis_bunga.index',
        compact('jenis_bunga'));
   }
   public function create()
   {
    return view('jenis_bunga.create');
   }
   public function store(Request $request)
   {
    $namaFile = time() . '.' . 
    $request->gambar->extension();

    $request->gambar->move(
        public_path('images/jenis_bunga'),
        $namaFile
    );

    JenisBunga::create([
        'nama_jenis' =>
        $request->nama_jenis,
        'gambar' => $namaFile,
    ]);

    return redirect('/jenis_bunga');
   }
   public function edit($id)
   {
    $jenis_bunga = JenisBunga::find($id);

    return view('jenis_bunga.edit',
        compact('jenis_bunga'));
   }
   public function update(Request $request,$id)
   {
    $jenis_bunga = JenisBunga::find($id);

    $jenis_bunga->update([
        'nama_jenis' => $request->nama_jenis,
    ]);
    return redirect('/jenis_bunga');
   }
   public function destroy($id)
   {
    $jenis_bunga = JenisBunga::find($id);

    $jenis_bunga->delete();

    return redirect('/jenis_bunga');
   }
}
