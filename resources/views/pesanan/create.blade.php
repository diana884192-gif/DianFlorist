<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
            background: linear-gradient(rgba(255,240,245,0.9), rgba(225,240,245,0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .judul-pink { color: deeppink; font-weight: bold; text-align: center; }
        .btn-simpan  { background: deeppink; color: white; border: none; border-radius: 10px; }
        .btn-kembali { background: hotpink;  color: white; border: none; border-radius: 10px; }
        .form-control:focus, .form-select:focus {
            border-color: hotpink;
            box-shadow: 0 0 0 0.2rem rgba(255,105,180,0.25);
        }
    </style>
</head>
<body>

<div class="form-card">
    <h4 class="judul-pink mb-4">🌷 Tambah Pesanan Baru</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/pesanan" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-bold">👤 Pelanggan</label>
            <select name="pelanggan_id" class="form-select" required>
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($pelanggan as $p)
                    <option value="{{ $p->id }}" {{ old('pelanggan_id') == $p->id ? 'selected' : '' }}>
                        {{ $p->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">🌸 Produk</label>
            <select name="produk_id" class="form-select" required>
                <option value="">-- Pilih Produk --</option>
                @foreach($produk as $pr)
                    <option value="{{ $pr->id }}" {{ old('produk_id') == $pr->id ? 'selected' : '' }}>
                        {{ $pr->nama_produk }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">📦 Jumlah</label>
            <input type="number" name="jumlah" class="form-control"
                   min="1" value="{{ old('jumlah') }}" placeholder="Masukkan jumlah" required>
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">📅 Tanggal Pesanan</label>
            <input type="date" name="tanggal_pesanan" class="form-control"
                   value="{{ old('tanggal_pesanan') }}" required>
        </div>

        <div class="d-flex gap-2 justify-content-center">
            <button type="submit" class="btn btn-simpan px-4">💾 Simpan</button>
            <a href="/pesanan" class="btn btn-kembali px-4">🔙 Kembali</a>
        </div>

    </form>
</div>

</body>
</html>