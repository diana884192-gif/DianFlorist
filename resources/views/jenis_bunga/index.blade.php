<!DOCTYPE html>
<html>
    <head>
        <title>DianFlorist - Jenis Bunga</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">

            <h2 class="text-center mb-4"
                style="color: deeppink;"> 🌸Data Jenis Bunga🌸
            </h2>

            <a href="/produk" class="btn btn-info btn-sm"> 🌺Produk </a>

            <a href="/pelanggan" class="btn btn-secondary btn-sm"> 👤Pelanggan </a>

            <a href="/jenis_bunga" class="btn btn-success btn-sm"> 💐 Jenis Bunga </a>

            <br><br>

            <a href="/jenis_bunga/create"
                class="btn text-white"
                style="background-color: hotpink;"> 🌸 Tambah Jenis Bunga 
            </a>

            <br><br>

            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nama Jenis Bunga</th>
                    <th>Aksi</th>
                </tr>

                @foreach($jenis_bunga as $j)
                <tr>
                    <td>{{ $j->id }}</td>
                    <td>{{ $j->nama_jenis }}</td>
                    <td> 
                        <a href="/jenis_bunga/{{ $j->id }}/edit"
                            class="btn btn-warning btn-sm">Edit
                        </a>

                        <form action="/jenis_bunga/{{ $j->id }}"
                            method="POST"
                            style="display: inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">Hapus 
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </body>
</html>