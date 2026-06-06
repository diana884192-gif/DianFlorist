<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pelanggan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="card mx-auto mt-5 shadow" style="max-width: 500px;">

            <div class="card-body">

                <h2 class="text-center mb-4"
                    style="color: deeppink;">🌸Edit Pesanan🌸</h2>

                <form method="POST" action="/pesanan/{{ $pesanan->id }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>👤 Nama Pelanggan</label>
                        <select name="pelanggan_id" class="form-control">
                            @foreach($pelanggan as $p)
                            <option value="{{ $p->id }}"{{ $pesanan->pelanggan_id == $p->id ? 'selected' :'' }}>
                                {{ $p->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>💐 Produk Bunga</label>
                        <select name="produk_id" class="form-control">
                            @foreach($produk as $pr)
                            <option value="{{ $pr->id }}" {{ $pesanan->produk_id == $pr->id ? 'selected':'' }}>
                                {{ $pr->nama_produk }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>📆 Tanggal Pesanan</label>
                        <input type="date" name="tanggal_pesanan" class="form-control" value="{{ $pesanan->tanggal_pesanan }}">
                    </div>

                    <button type="submit" class="btn text-white" style="background-color: hotpink;">🌷 Update Pesanan</button>

                    <a href="/pesanan" class="btn btn-secondary">
                        Kembali
                    </a>
                </form>
            </div>
        </div>
    </body>
</html>
