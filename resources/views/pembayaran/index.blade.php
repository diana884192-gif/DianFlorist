<!DOCTYPE html>
<html>
    <head>
        <title> Data Pembayaran</title>

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">

            <h2 class="text-center mb-4" style="color: deeppink;">💳 Data Pembayaran💳</h2>

            <a href="/produk" class="btn btn-primary btn-sm"> 🌸 Produk</a>

            <a href="/pelanggan" class="btn btn-secondary btn-sm">👤 Pelanggan</a>

            <a href="/jenis_bunga" class="btn btn-info btn-sm"> 💐 Jenis Bunga</a>

            <a href="/pesanan" class="btn btn-ungu btn-sm"> 🛒Pesanan</a>

            <a href="/pembayaran" class="btn bg-orange btn-sm"> 💳 pembayaran</a>

            <a href="/pembayaran/create" class="btn text-white mb-3" style="background-color: hotpink;"> 🌷 Tambah Pembayaran</a>

            <table class="table table-bordered table-hover bg-white">
                <tr>
                    <th>No</th>
                    <th>Pesanan</th>
                    <th>Metode Pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td> pesanan #{{ $item->pesanan_id }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>
                        <a href="/pembayaran/{{ $item->id }}/edit" class="btn btn-warning btn-sm"> ✏ Edit</a>

                        <form action="/pembayaran/{{ $item->id }}" method="POST" style="display: inline;">
                            @csrf 
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                               🗑 Hapus 
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </body>
</html>
