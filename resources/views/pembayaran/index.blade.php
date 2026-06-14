<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
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
        .app-layout {
            display: flex;
        }
        .card {
            border-radius: 20px;
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
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
        .sidebar a:hover {
            background: mistyrose;
            color: deeppink;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .judul-pink {
            text-align: center;
            color: deeppink;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .subjudul{
            text-align: center;
            color: gray;
            margin-top: 15px;
        }
    </style>
</head>

<body>
<div class="app-layout">

    {{-- SIDEBAR --}}
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
        <h2 class="judul-pink">💳 Data Pembayaran - DianFlorist 💳</h2>
        <p class="subjudul"> Satu langkah menuju bunga dan kado yang penuh makna 🌸✨</p>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <a href="/pembayaran/create" class="btn text-white mb-4" style="background-color: hotpink;">
            🌷 Tambah Pembayaran
        </a>

        <div class="row">
            @forelse($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <h5 style="color:deeppink;">💳 Pembayaran {{ $loop->iteration }}</h5>

                        <p>👤 Pemesan : {{ optional(optional($item->pesanan)->pelanggan)->nama ?? '-' }}</p>
                        <p>🌸 Produk : {{ optional(optional($item->pesanan)->produk)->nama_produk ?? '-' }}</p>
                        <p>💰 Metode : {{ $item->metode_pembayaran }}</p>
                        <p>📌 Status :
                            @if($item->status_pembayaran == 'lunas')
                                <span class="badge bg-success">Lunas</span>
                            @elseif($item->status_pembayaran == 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @else
                                <span class="badge bg-danger">Gagal</span>
                            @endif
                        </p>

                        <div class="d-flex gap-2">
                            <a href="/pembayaran/{{ $item->id }}/edit" class="btn btn-warning btn-sm">✏ Edit</a>

                            <form action="/pembayaran/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus ?')">
                                    🗑 Hapus
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada data pembayaran.</div>
            </div>
            @endforelse
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>