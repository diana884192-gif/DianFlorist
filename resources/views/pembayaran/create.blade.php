<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembayaran</title>
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
            width: 250px;
            min-height: 100vh;
            background: lavenderblush;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: black;
            border-radius: 8px;
            transition: 0.3s;
        }
        .sidebar a:hover { background: mistyrose; color: deeppink; }
        .content { flex: 1; padding: 20px; }
        .judul-pink {
            text-align: center;
            color: deeppink;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card { border-radius: 20px; }
    </style>
</head>
<body>
<div class="app-layout">

    <div class="sidebar">
        <h4 class="text-center" style="color:deeppink;">🌸 DianFlorist</h4>
        <a href="/">🏠 Dashboard</a>
        <a href="/produk">🌸 Produk</a>
        <a href="/pelanggan">👤 Pelanggan</a>
        <a href="/jenis_bunga">💐 Jenis Bunga</a>
        <a href="/pesanan">🛒 Pesanan</a>
        <a href="/pembayaran">💳 Pembayaran</a>
    </div>

    <div class="content">
        <h2 class="judul-pink">🌷 Tambah Pembayaran</h2>

        <div class="card shadow-sm p-4" style="max-width: 600px; margin: auto;">
            <form action="/pembayaran" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">🛒 Pesanan</label>
                    <select name="pesanan_id" class="form-select @error('pesanan_id') is-invalid @enderror">
                        <option value="">-- Pilih Pesanan --</option>
                        @foreach($pesanan as $p)
                            <option value="{{ $p->id }}" {{ old('pesanan_id') == $p->id ? 'selected' : '' }}>
                                {{ $p->pelanggan->nama ?? '-' }} - {{ $p->produk->nama_produk ?? '-' }}
                            </option>
                        @endforeach
                    </select>
                    @error('pesanan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">💰 Metode Pembayaran</label>
                    <select name="metode_pembayaran" class="form-select @error('metode_pembayaran') is-invalid @enderror">
                        <option value="">-- Pilih Metode --</option>
                        <option value="Transfer Bank" {{ old('metode_pembayaran') == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                        <option value="COD" {{ old('metode_pembayaran') == 'COD' ? 'selected' : '' }}>COD</option>
                        <option value="E-Wallet" {{ old('metode_pembayaran') == 'E-Wallet' ? 'selected' : '' }}>E-Wallet</option>
                    </select>
                    @error('metode_pembayaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" style="color:deeppink;">📌 Status Pembayaran</label>
                    <select name="status_pembayaran" class="form-select @error('status_pembayaran') is-invalid @enderror">
                        <option value="">-- Pilih Status --</option>
                        <option value="lunas" {{ old('status_pembayaran') == 'lunas' ? 'selected' : '' }}>Lunas</option>
                        <option value="pending" {{ old('status_pembayaran') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="gagal" {{ old('status_pembayaran') == 'gagal' ? 'selected' : '' }}>Gagal</option>
                    </select>
                    @error('status_pembayaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn text-white" style="background-color:hotpink;">
                        💾 Simpan
                    </button>
                    <a href="/pembayaran" class="btn btn-secondary">⬅ Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>