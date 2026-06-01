<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Produk</title>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap @5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">
            <h2 class="mb-4"> Data Produk DianFlorist</h2>

            <table class="rable table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>

                @foreach($produk as $p)
                <tr>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>

                    <a href="/produk/{{ $p->id }}/edit">Edit</tr>/a>"
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>