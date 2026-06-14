<!DOCTYPE html>
<html>
    <head>
        <title>Data Pelanggan</title>
    </head>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
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
                background: lavenderblush;
                padding: 20px;
                box-shadow: 2px 0 10px rgba(0,0,0,0.1)
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
                font-size: 45px;
            }
            .subjudul{
                color: gray;
                font-size: 16px;
            }
            .btn-tambah{
                background-color: hotpink;
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
            .box{
                background-color: seashell;
                padding:25px;
                border-radius: 25px;
                box-shadow: 0 4px 15px lightpink;
            }
            .table thead{
                background-color: hotpink;
                color: white;
            }
            .table tbody tr:hover{
                background-color: mistyrose;
            }
        </style>
<body>

    <div class="app-layout">

        <div class="sidebar">
            <h4 class="text-center mb-4" style="color: deeppink;"> 🌸 DianFlorist </h4>

            <a href="/">🏠 Dashboard</a>
            <a href="/produk"> 🌸 Produk </a>
            <a href="/pelanggan"> 👤Pelanggan </a>
            <a href="/jenis_bunga"> 💐 Jenis Bunga</a>
            <a href="/pesanan"> 🛒 Pesanan </a>
            <a href="/pembayaran"> 💳 pembayaran</a>
        </div>

        <div class="content">
            <h1 class="text-center mb-4 judul-pink"> 🌸Data Pelanggan - DianFlorist🌸 </h1>
        <p class="text-center mb-4 subjudul"> 🌸 Tempat berkumpulnya pelanggan kesayangan DianFlorist 🌸 
            <br>
             🌷 Karena setiap pelanggan itu spesial🌷</p>

        <a href="/pelanggan/create" class="btn  btn-tambah mb-3"> 🌷 Tambah Pelanggan</a>
        <br>
        <div class="box">

            <table class="table table-bordered table-hover text-center align-middle">

                <thead class="thead-flower">
                    <tr>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($pelanggan as $p)
                    <tr>
                        <td class="nama-pelanggan">{{ $p->nama }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td>
                        <a href="/pelanggan/{{ $p->id }}/edit" class="btn btn-edit btn-sm"> ✏ Edit</a>

                        <form action="/pelanggan/{{ $p->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-hapus btn-sm"> 🗑 Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</body>
</html>