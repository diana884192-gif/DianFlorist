<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - DianFlorist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
            background-image: linear-gradient(
                rgba(255,240,245,0.72),
                rgba(225,240,245,0.72)
            ), url('/images/bunga-pink.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .app-layout { display: flex; }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: lavenderblush;
            padding: 20px;
            position: sticky;
            top: 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: black;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
        }
        .sidebar a:hover { background: mistyrose; color: deeppink; }
        .content { flex: 1; padding: 30px; }
        .judul-pink { color: deeppink; font-weight: bold; text-align: center; margin-bottom: 30px; }
        .card { border-radius: 20px; }
        .img-preview {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="app-layout">

    <div class="sidebar">
        <h3 class="text-center mb-4" style="color: deeppink;">🌸 DianFlorist</h3>
        <a href="/">🏠 Dashboard</a>
        <a href="/produk">🌸 Produk</a>
        <a href="/pelanggan">👤 Pelanggan</a>
        <a href="/jenis_bunga">💐 Jenis Bunga</a>
        <a href="/pesanan">🛒 Pesanan</a>
        <a href="/pembayaran">💳 Pembayaran</a>
    </div>

    <div class="content">
        <h2 class="judul-pink">✏ Edit Produk</h2>

        <div class="card shadow-sm p-4" style="max-width: 600px; margin: auto;">

            <form action="/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">🌸 Nama Produk</label>
                    <input type="text" name="nama_produk"
                        value="{{ old('nama_produk', $produk->nama_produk) }}"
                        class="form-control @error('nama_produk') is-invalid @enderror">
                    @error('nama_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">💰 Harga</label>
                    <input type="number" name="harga"
                        value="{{ old('harga', $produk->harga) }}"
                        class="form-control @error('harga') is-invalid @enderror" min="0">
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">📦 Stok</label>
                    <input type="number" name="stok"
                        value="{{ old('stok', $produk->stok) }}"
                        class="form-control @error('stok') is-invalid @enderror" min="0">
                    @error('stok')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label" style="color:deeppink;">🖼 Gambar Produk</label>

                    {{-- Preview gambar lama --}}
                    @if($produk->gambar && file_exists(public_path('images/produk/' . $produk->gambar)))
                        <div class="mb-2">
                            <p class="text-muted small">Gambar saat ini:</p>
                            <img src="{{ asset('images/produk/' . $produk->gambar) }}"
                                id="preview" class="img-preview" alt="Gambar Produk">
                        </div>
                    @else
                        <img id="preview" src="#" class="img-preview" style="display:none;">
                    @endif

                    <input type="file" name="gambar" accept="image/*"
                        class="form-control @error('gambar') is-invalid @enderror"
                        onchange="previewGambar(event)">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn text-white" style="background-color:deeppink;">
                        💾 Update Produk
                    </button>
                    <a href="/produk" class="btn btn-secondary">⬅ Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function previewGambar(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    }
</script>
</body>
</html>