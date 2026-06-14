<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Produk</title>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

        <style>
        body{
            font-family: 'Lora', serif;
            margin: 0;

            background-image: linear-gradient(
                rgba(225,240,245,0.72),
                rgba(225,240,245,0.72)
            ),
            url('/images/bunga-pink.jpeg')
        }
        .app-layout{
            display: flex;
        }
        .sidebar{
            width: 250px;
            min-height: 100vh;
            background: lavenderblush;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar a{
            display: block;
            padding: 12px;
            text-decoration: none;
            color: black;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
        }
        .sidebar a:hover{
            background: mistyrose;
            color: deeppink;
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
        .sidebar{
            width: 260px;
            height: 100vh;
            background: white;
            padding: 20px;
            position: sticky;
            top: 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0,1);
        }
        .content{
            flex: 1;
            padding: 20px;
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
        .img-card{
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 15px;
        }
        .card-produk{
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 15px lightpink;
            height: 100%;
        }
        .card-produk:hover{
            transform: translateY(-5px);
            transition: 0.3s;
        }
        .icon.bunga{
            font-size: 60px;
            margin-bottom: 10px;
        }
        .nama-produk{
            color: deeppink;
            font-weight: bold;
        }
        .harga{
            color: hotpink;
            font-size: 22px;
        }
        .stok{
            color: gray; 
        }
        .search-pink{
            border-radius: 10px;
            border: 2px solid hotpink;
        }
        .btn-pink,
        .btn-kembali{
            border-radius: 10px;
            border: none;
            padding: 8px 12px;
            color: white;
            transition: 0.3s;
        }
        .btn-pink{
            background-color: deeppink;
            color: white;
            border-radius: 10px;
        }
        .btn-pink:hover{
            background-color: hotpink;
            color: white;
        }
        .btn-kembali{
            background-color: lightpink;
            color: white;
            border-radius: 10px;
        }
        .btn-kembali:hover{
            background-color: palevioletred;
            color: white;
        }
        </style>
    </head>

    <body>
        <div class="app-layout">

            <div class="sidebar">
            <h3 class="text-center mb-4" style="color: deeppink;"> 🌸 DianFlorist </h3>

            <a href="/">🏠 Dashboard</a>
            <a href="/produk"> 🌸 Produk </a>
            <a href="/pelanggan"> 👤 Pelanggan </a>
            <a href="/jenis_bunga"> 💐 Jenis Bunga </a>
            <a href="/pesanan"> 🛒 Pesanan </a>
            <a href="/pembayaran"> 💳 Pembayaran </a>
            </div>

            <div class="content">
                
                <h1 class="text-center judul-pink"> 🌺 Produk DianFlorist🌺</h1>

                <p class="text-center subjudul"> 🌺 Dibuat dengan Cinta, Dihiasi dengan Bunga 🌺</p>
                @if(session('success'))
                <div class="alert alert-success text-center"> {{ session('success') }}</div>
                @endif

                <div class="search-box mb-3">

                    <form action="/produk" method="GET" class="mb-3 w-50 d-flex">
                        <input type="text " name="search" class="form-control" placeholder="🔍 Cari produk...">
                        <button type="submit" class="btn btn-pink me-2"> Cari </button>
                        <a href="/produk" class="btn btn-kembali"> Kembali </a>                   </form>

                    <br>

                    <a href="/produk/create" class="btn btn-tambah mb-lg"> 🌷 Tambah Produk </a>
                </div>
                <br>
                        <div class="row">

                            @foreach($produk as $p)

                            <div class="col-md-4 mb-4">

                                <div class="card-produk">

                                    <img src="{{ asset('images/produk/' . $p->gambar) }}" class="img-card">

                                    <h5 class="nama-produk">{{ $p->nama_produk }}</h5>

                                    <p class="harga">Rp {{ number_format($p->harga, 0, ',', '.') }}</p>

                                    <p class="stok">
                                        📦 Stok : {{ $p->stok }}</p>

                                    <div class="mt-3">

                                        <a href="/produk/{{ $p->id }}/edit" class="btn btn-edit btn-sm"> ✏ Edit </a>

                                        <form action="/produk/{{ $p->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-hapus btn-sm"> 🗑 Hapus </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>