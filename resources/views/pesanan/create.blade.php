<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pesanan</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="card mx-auto mt-5 shadow" style="max-width:500px;">

            <div class="card-body">

                <h2 class="text-center mb-4"
                    style="color: deeppink">🌸From Pemesanan Bunga🌸</h2>
                    <p class="text-center text-muted"> Isi data pesanan bunga pelanggan </p>

                <form method="POST" action="/pesanan">
                    @csrf

                    <div class="mb-3">
                        <label> 👤Nama Pelanggan</label>
                        <select name="pelanggan_id" class="form-control">
                            @foreach($pelanggan as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>💐Pilih Produk</label>
                        <select name="produk_id" class="form-control">
                            @foreach($produk as $pr)
                                <option value="{{ $pr->id }}">{{ $pr->nama_produk }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>🛒 Jumlah Pesanan</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>📆Tanggal Pesanan</label>
                        <input type="date" name="tanggal_pesanan" class="form-control">
                    </div>

                    <button class="btn text-white w-100" 
                        style="background-color: hotpink;"> 🌷Simpan Pesanan</button>
                </form>
            </div>
        </div>
    </body>
</html>