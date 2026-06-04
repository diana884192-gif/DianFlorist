<h2>Edit Produk</h2>

<form method="POST" action="/produk/{{ $produk->id }}">
    @csrf
    @method('PUT')

    <label>Nama</label><br>
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="{{ $produk->harga }}"><br><br>

    <label>Stok</label>
    <input type="number" name="stok" value="{{ $produk->stok }}"><br><br>

    <button type="submit">Update</button>