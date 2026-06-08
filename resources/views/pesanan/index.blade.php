<!DOCTYPE html>
<html>
    <head>
        <title>Pesanan</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="container mt-5">

            <h2 class="text-center mb-4"style="color:deepink;">🌸Data Pesanan DianFlorist🌸</h2>
 
            <a href="/pesanan/create" class="btn btn-info btn-sm"> 🌸 Produk </a>

            <a href="/pelanggan" class="btn btn-secondary btn-sm"> 👤 Pelanggan </a>

            <a href="/jenis_bunga" class="btn btn-success btn-sm"> 💐Jenis Bunga </a>

            <a href="/pesanan" class="btn btn-warning btn-sm"> 🛒 Pesanan </a>

            <a href="/pembayaran" class="btn bg-orange btn-sm"> 💳 pembayaran</a>

            <br><br>

            <a href="pesanan/create" class="btn text-white" style="background-color: hotpink;">🌷 Tambah Pesana </a>

            <br><br>

            <table class="table table-bordered table-hover bg-white">
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Status Pesanan </th>
                    <th>Aksi</th>
                </tr>

                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->pelanggan->nama }}</td>
                    <td>{{ $item->produk->nama_produk }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tanggal_pesanan }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/pesanan/{{ $item->id }}/edit" class="btn btn-warning btn-sm"> ✏ Edit</a>

                        <form action="/pesanan/{{ $item->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class=" btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini ?')"> 🗑 Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
