<!DOCTYPE html>
<html>
    <head> 
        <title>Edit Produk</title>

        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="container nt-5">

            <div class="crad shadow mx-auto"
                style="max-width: 500px;">

                <div class="crad-body">

                <h2 class="text-center mb-4"
                    style="color: deeppink">Edit produk
                </h2>

                <form action="/produk/{{ $produk->id }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="mb-3">

                        <label class="form-label">Nama Produk</label><br>
                        <input type="text"
                               name="nama_produk"
                               class="form-control"
                               value="{{ $produk->nama_produk }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label><br>
                        <input type="number"
                               name="harga"
                               class="form-control"
                               value="{{ $produk->harga }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number"
                               name="stok"
                               class="form-control"
                               value="{{ $produk->stok }}">
                    </div>

                        <button type="submit" class="btn btn-primary">Update</button>

                        <a href="/produk" class="btn btn-secondary">Kembali </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>