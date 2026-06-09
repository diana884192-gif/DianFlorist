<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Produk</title>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

        <style>
        body{
            background-color: lavenderblush;
        }
        .judul-pink{
            color: deeppink;
            font-weight: bold;
            font-size: 45px;

        }
        .subjudul{
            color: gray;
            font-size: 16px;
            margin-bottom: 25px;
        }
        .kotak-tabel{
            background-color: seashell;
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 25px;
            box-shadow: 0 4px 15px lightpink;
        }
        .menu-produk{
            background-color: deeppink;
            color: white;
        }
        .menu-pelanggan{
            background-color: hotpink;
            color: white;
        }
        .menu-jenis{
            background-color: palevioletred;
            color: white;
        }
        .menu-pesanan{
            background-color: lightcoral;
            color: white;
        }
        .menu-pembayaran{
            background-color: orchid;
            color: white;
        }
        .btn-tambah{
            background-color: deeppink;
            color: white;
        }
        .btn-edit{
            background-color: hotpink;
            color: white;
        }
        .btn-hapus{
            background-color: tomato;
            color: white;
        }
        .table thead{
            background-color: hotpink;
            color: white;
        }
        .table tbody tr:hover{
            background-color: mistyrose;
        }
        </style>
    </head>

    <body>
        <div class="container mt-5">

            <h1 class="text-center mb-4 judul-pink"> 🌺DianFlorist🌺</h1>
            <p class="text-center subjudul">
                🌺 Dibuat dengan Cinta, Dihiasi dengan Bunga🌺
            </p>
            @if(@session('success'))
                <div class="alert alert-success text-center"> {{ session('success') }} </div>
            @endif
            <a href="/produk" class="btn menu-produk btn-sm"> 🌸 Produk</a>
            <a href="/pelanggan" class="btn menu-pelanggan btn-sm">👤 Pelanggan</a>
            <a href="/jenis_bunga" class="btn menu-jenis btn-sm"> 💐 Jenis Bunga</a>
            <a href="/pesanan" class="btn menu-pesanan btn-sm"> 🛒Pesanan</a>
            <a href="/pembayaran" class="btn menu-pembayaran btn-sm"> 💳 pembayaran</a>

            <br><br>

            <a href="/produk/create" class="btn btn-tambah mb-3">🌷 Tambah Produk</a>

            <div class="kotak-tabel">

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th> 🌸 Nama Produk</th>
                        <th> 💰 Harga</th>
                        <th> 📦 Stok</th>
                        <th> ⚙ Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $p)
                    <tr>
                        <td>{{ $p->nama_produk }}</td>
                        <td>{{ number_format($p->harga, 0, ',', '.') }}</td>
                        <td>{{ $p->stok }}</td>
                        <td>
                            <a href="/produk/{{ $p->id }}/edit" class="btn btn-edit btn-sm"> ✏ Edit</a>
                            <form action="/produk/{{ $p->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method( 'DELETE' )

                                <button type="submit" class="btn btn-hapus btn-sm"> 🗑 Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>