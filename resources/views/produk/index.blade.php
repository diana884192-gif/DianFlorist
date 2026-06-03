<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Produk</title>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">
            <h2 class="text-center text-primary mb-4"> 🌺Data Produk DianFlorist🌺</h2>

            <a href="/produk" class="btn btn-primary btn-sm">Produk</a>
            <a href="/pelanggan" class="btn btn-succes btn-sm">Pelanggan</a>

            <br><br>
            <a href="/produk/create"
                class="btn"
                style="background-color: brown"> + Tambah Produk 
            </a>

            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                @foreach($produk as $p)
                <tr>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>
                    <a href="/produk/{{ $p->id }}/edit" class="btn btn-warning btn-sm btn-info">Edit</a>

                    <form action="/produk/{{ $p->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method( 'DELETE' )

                        <button type="submit"
                                class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>