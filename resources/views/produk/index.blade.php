<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Produk</title>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

        <style>
        body{
            background-color: floralwhite;
        }
        .judul-orange{
            color: darkorange;
            font-weight: bold;
        }
        .btn-orange{
            background-color: darkorange;
            color: white;
        }
        .kotak-tabel{
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(red, green, blue, alpha);
        }
        .table-orange thead{
            background-color: darkorange;
            color: white
        }
        .table{
            border-radius: 15px;
            overflow: hidden;
        }
        </style>
    </head>

    <body>

        <div class="container mt-5">
            <h2 class="text-center mb-4 judul-orange"> 🧡Data Produk DianFlorist🧡</h2>

            <a href="/produk" class="btn btn-primary btn-sm"> 🧡 Produk</a>

            <a href="/pelanggan" class="btn btn-secondary btn-sm">👤 Pelanggan</a>

            <a href="/jenis_bunga" class="btn btn-info btn-sm"> 🏵️ Jenis Bunga</a>

            <a href="/pesanan" class="btn btn-ungu btn-sm"> 🛒Pesanan</a>

            <a href="/pembayaran" class="btn bg-orange btn-sm"> 💳 pembayaran</a>

            <br><br>

            <a href="/produk/create"
                class="btn btn-orange mb-3">🧡 Tambah Produk 
            </a>

            <div class="kotak-tabel">

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th> 🏵️ Nama Produk</th>
                        <th> 💰 Harga</th>
                        <th> 📦 Stok</th>
                        <th> ⚙ Aksi</th>
                    </tr>
                </thead>

                @foreach($produk as $p)
                <tr>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>
                    <a href="/produk/{{ $p->id }}/edit" class="btn btn-sm" style="background-color: orange; color: white"> ✏ Edit</a>

                    <form action="/produk/{{ $p->id }}" method="POST" style="background-color: orange; color: white">
                        @csrf
                        @method( 'DELETE' )

                        <button type="submit"
                                class="btn btn-sm"
                                style="background-color: tomato; color:white;"> 🗑 Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>