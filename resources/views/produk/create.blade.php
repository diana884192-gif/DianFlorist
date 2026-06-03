<h2 style="color: pink; text-align:center;">🌺Tambah Produk DianFlorist🌺</h2>

<div style="text-align: center;">

<form method="POST" action="/produk">
    @csrf

    <label>Nama Produk</label><br>
    <input type="text" name="nama_produk"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>

</div>