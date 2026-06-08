<!DOCTYPE html>
<html>
    <head>
        <title>Data Pelanggan</title>
    </head>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
<body>

    <div class="container mt-5">

        <h2 class="text-center mb-4" style="color: deeppink">🌸DianFlorist - Data Pelanggan🌸</h2>

        <a href="/produk" class="btn btn-info btn-sm"> 🌸 Produk </a>

        <a href="/pelanggan" class="btn btn-secondary btn-sm"> 👤Pelanggan </a>

        <a href="/jenis_bunga" class="btn btn-info btn-sm"> 💐 Jenis Bunga</a>

        <a href="/pesanan" class="btn btn-warning btn-sm"> 🛒 Pesanan </a>

        <a href="/pembayaran" class="btn bg-orange btn-sm"> 💳 pembayaran</a>
        
        <br><br>
        
        <a href="/pelanggan/create" class="btn text-white" style="background-color: hotpink"> 🌷 Tambah Pelanggan</a>

        <br><br>
        <table class="table table-bordered" table-hover text-center>
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
                <a href="/pelanggan/{{ $p->id }}/edit" class="btn btn-warning btn-sm"> ✏ Edit</a>

                <form action="/pelanggan/{{ $p->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"> 🗑 Hapus</button>
                </form>
            </tr>
            @endforeach
        </table>
    </body>
</html> 