<!DOCTYPE html>
<html>
<head>
    <title>Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
            margin: 0;
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
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
        }
        .sidebar a:hover { background: mistyrose; color: deeppink; }
        .content { flex: 1; padding: 20px; }
        .judul-pink {
            text-align: center;
            color: deeppink;
            font-weight: bold;
            margin-top: 20px;
        }
        .card-pesanan {
            background: white;
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
            height: 100%;
        }
        .card-pesanan:hover { transform: translateY(-5px); }
        .btn-edit    { background: hotpink; color: white; border: none; }
        .btn-hapus   { background: tomato;  color: white; border: none; }
        .btn-tambah  { background: deeppink; color: white; border-radius: 10px; }
        .badge-proses  { background: orange; color: white; padding: 5px 10px; border-radius: 8px; }
        .badge-selesai { background: green;  color: white; padding: 5px 10px; border-radius: 8px; }
        .badge-batal   { background: red;    color: white; padding: 5px 10px; border-radius: 8px; }
    </style>
</head>
<body>

<div class="app-layout">

    <div class="sidebar">
        <h3 class="text-center" style="color:deeppink;">🌸 DianFlorist</h3>
        <a href="/">🏠 Dashboard</a>
        <a href="/produk">🌸 Produk</a>
        <a href="/pelanggan">👤 Pelanggan</a>
        <a href="/jenis_bunga">💐 Jenis Bunga</a>
        <a href="/pesanan">🛒 Pesanan</a>
        <a href="/pembayaran">💳 Pembayaran</a>
    </div>

    <div class="content">

        <h2 class="judul-pink">🛒 Data Pesanan DianFlorist</h2>

        {{-- Flash Message --}}
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="text-center mb-4">
            <a href="/pesanan/create" class="btn btn-tambah">🌷 Tambah Pesanan</a>
        </div>

        {{-- Jika data kosong --}}
        @if($data->isEmpty())
            <div class="text-center text-muted mt-5">
                <p>Belum ada pesanan. Silakan tambah pesanan baru 🌸</p>
            </div>
        @else

        <div class="row">
            @foreach($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card-pesanan">

                    <h5 style="color:deeppink; font-weight:bold;">
                        🛒 Pesanan #{{ $loop->iteration }}
                    </h5>

                    <p>👤 {{ $item->pelanggan->nama ?? '-' }}</p>
                    <p>🌸 {{ $item->produk->nama_produk ?? '-' }}</p>
                    <p>📦 {{ $item->jumlah }}</p>
                    <p>📅 {{ \Carbon\Carbon::parse($item->tanggal_pesanan)->format('d M Y') }}</p>

                    <p>
                        📌 Status:
                        @if($item->status == 'proses')
                            <span class="badge-proses">Proses</span>
                        @elseif($item->status == 'selesai')
                            <span class="badge-selesai">Selesai</span>
                        @else
                            <span class="badge-batal">Batal</span>
                        @endif
                    </p>

                    <div class="d-flex gap-2 mt-3">
                        <a href="/pesanan/{{ $item->id }}/edit" class="btn btn-edit btn-sm">
                            ✏ Edit
                        </a>
                        <form action="/pesanan/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-hapus btn-sm"
                                    onclick="return confirm('Yakin mau hapus pesanan ini?')">
                                🗑 Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        @endif

    </div>
</div>

</body>
</html>