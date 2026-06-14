<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Jenis Bunga</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
        <style>
            body{
                font-family: 'Lora', serif;
            margin: 0;

            background-image: linear-gradient(
                rgba(255,240,245,0.72),
                rgba(225,240,245,0.72)
            ),
            url('/images/bunga-pink.jpeg');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            }
            .app-layout{
                display: flex;
            }
            .sidebar{
                width: 250px;
                min-height: 100vh;
                background: white;
                padding: 20px;
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
            .content{
                flex: 1;
                padding: 20px;
            }
            .judul-pink{
                color: deeppink;
                font-weight: bold;
                text-align: center;
            }
            .subjudul{
                text-align: center;
                color: gray;
                font-size: 25px;
            }
            .card-bunga{
                background: white;
                border-radius: 20px;
                padding: 15px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                text-align: center;
                transition: 0.3s;
            }
            .card-bunga:hover{
                transform: translateY(-5px);
            }
            .img-bunga{
                width: 100%;
                height: 180px;
                object-fit: cover;
                border-radius: 15px;
            }
            .nama-bunga{
                margin-top: 10px;
                color: deeppink;
                font-weight: bold;
                font-size: 18px;
            }
            .btn-tambah{
                background: hotpink;
                color: white;
            }
            .btn-edit{
                background: violet;
                color: white;
            }
            .btn-hapus{
                background: tomato;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="app-layout">
            <div class="sidebar">

                <h2 class="text-center mb-4" style="color: deeppink;"> 🌸DianFlorist</h2>

                <a href="/">🏠 Dashboard</a>
                <a href="/produk"> 🌸 Produk </a>
                <a href="/pelanggan"> 👤 Pelanggan </a>
                <a href="/jenis_bunga"> 💐 Jenis Bunga </a>
                <a href="/pesanan"> 🛒 Pesanan </a>
                <a href="/pembayaran"> 💳 pembayaran</a>
            </div>
            <div class="content">

                <h1 class="judul-pink"> 💐 Jenis Bunga - DianFlorist💐 </h1>
                <p class="mb-4 subjudul"> Katalog bunga DianFlorist 🌸 </p>

                <a href="/jenis_bunga/create" class="btn btn-tambah mb-3"> 💐 Tambah Jenis Bunga </a>

                <div class="row">

                    @foreach($jenis_bunga as $j)

                    <div class="col-md-4 mb-4">

                        <div class="card-bunga">

                            <img src="/images/jenis_bunga/{{ $j->gambar }}" class="img-bunga">

                            <div class="nama-bunga"> {{ $j->nama_jenis }} </div>

                            <div class="mt-3">

                                <a href="/jenis_bunga/{{ $j->id }}/edit" class="btn btn-edit btn-sm"> ✏ Edit </a>

                                <form action="/jenis_bunga/{{ $j->id }}" method="POST" class="d-inline"> 
                                    @csrf
                                    @method('DELETE')

                                    <button class=" btn btn-hapus btn-sm"> 🗑 Hapus </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>