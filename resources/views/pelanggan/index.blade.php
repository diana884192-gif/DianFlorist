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
                background-color: lavenderblush;
            }
            .judul-pink{
                color: deeppink;
                font-weight: bold;
                font-size: 45px;
            }
            .subjudul{
                color: gray;
                font-weight: bold;
                font-size: 25px;
            }
            .kotak-tabel{
                background-color: seashell;
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
            .table head{
                background-color: hotpink;
                color: white;
            }
            .table tbody tr:hover{
                background-color: mistyrose;
            }
        </style>
<body>

    <div class="kotak tabel">

        <h1 class="text-center mb-4 judul-pink"> 🌸DianFlorist - Data Pelanggan🌸 </h1>
        <p class="text-center mb-4 subjudul"> 🌸 Tempat berkumpulnya pelanggan kesayangan DianFlorist 🌸 
            <br>
             🌷 Karena setiap pelanggan itu spesial🌷</p>

        <a href="/produk" class="btn menu-produk btn-sm"> 🌸 Produk </a>

        <a href="/pelanggan" class="btn menu-pelanggan btn-sm"> 👤Pelanggan </a>

        <a href="/jenis_bunga" class="btn menu-jenis btn-sm"> 💐 Jenis Bunga</a>

        <a href="/pesanan" class="btn menu-pesanan btn-sm"> 🛒 Pesanan </a>

        <a href="/pembayaran" class="btn menu-pembayaran btn-sm"> 💳 pembayaran</a>
        
        <br><br>
        
        <a href="/pelanggan/create" class="btn  btn-tambah"> 🌷 Tambah Pelanggan</a>

        <br><br>
        <table class="table table-bordered table-hover text-center">
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>

            @foreach($pelanggan as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->no_hp }}</td>
            <td>
                <a href="/pelanggan/{{ $p->id }}/edit" class="btn btn-edit btn-sm"> ✏ Edit</a>

                <form action="/pelanggan/{{ $p->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-hapus btn-sm"> 🗑 Hapus</button>
                </form>
            </tr>
            @endforeach
        </table>
    </body>
</html> 